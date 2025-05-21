<template>
    <div class="container">
        <h2>Elevator Simulation Vue.Js</h2>
        <div class="elevator-layout">
            <!-- Floor labels -->
            <div class="floor-labels">
                <div v-for="floor in floors.slice().reverse()" :key="floor" class="floor-label">
                    {{ getFloorLabel(floor) }}
                </div>
            </div>

            <!-- Elevator shafts -->
            <div v-for="(elevator, i) in elevators" :key="i" class="elevator-column">
                <div
                    v-for="floor in floors.slice().reverse()"
                    :key="floor"
                    class="elevator-cell"
                    :class="{
            'current-story': elevator.currentStorey === floor,
            'moving': elevator.isMoving,
            'arrived-now': elevator._arrived && elevator.currentStorey === floor,
         }"
                >
                    <img
                        v-if="elevator.currentStorey === floor"
                        :src="elevatorIcon"
                        alt="Elevator"
                        class="elevator-icon"
                        :class="{
                            red: elevator.isMoving,
                            green: !elevator.isMoving && elevator.color === 'green',
                        }"
                    />
                    <div v-if="elevator.callingStory === floor && elevator.isMoving" class="time-label">
                        {{ elevator.timerDisplay }}
                    </div>
                </div>
            </div>

            <!-- Call buttons -->
            <div class="call-buttons">
                <button
                    v-for="floor in floors.slice().reverse()"
                    :key="floor"
                    class="call-button"
                    :disabled="callStates[floor]?.status === 'waiting'"
                    :class="{
            waiting: callStates[floor]?.status === 'waiting',
            arrived: callStates[floor]?.status === 'arrived',
          }"
                    @click="handleCall(floor)"
                >
                    {{ callStates[floor]?.label || 'Call' }}
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import {ref, reactive} from 'vue';
import elevatorIcon from '../assets/icons8-elevator.svg';

const NUM_ELEVATORS = 5;
const floors = Array.from({length: 10}, (_, i) => i);

const elevators = reactive(
    Array.from({length: NUM_ELEVATORS}, () => ({
        currentStorey: 0,
        callingStory: null,
        isMoving: false,
        timerStart: null,
        timerDisplay: '',
        queue: [],
        color: 'black'
    }))
);

const callStates = reactive({}); // { floor: { status: 'waiting'|'arrived', label: string } }

const sound = new Audio('https://actions.google.com/sounds/v1/cartoon/clang_and_wobble.ogg');

function handleCall(floor) {
    const [bestElevatorIndex, time] = getBestElevatorIndex(floor);
    const elevator = elevators[bestElevatorIndex];
    elevator.queue.push(floor);

//    const etaSeconds = calculateETA(elevator, floor);
    elevator.timerDisplay = `${time} sec${time > 1 ? 's' : ''}`;

    callStates[floor] = {status: 'waiting', label: 'Waiting'};

    if (!elevator.isMoving) {
        processElevatorQueue(elevator, bestElevatorIndex);
    }
}

function calculateETA(elevator, targetFloor) {
    let eta = 0;
    let current = elevator.currentStorey;
    const queue = [...elevator.queue, targetFloor];

    for (let stop of queue) {
        eta += Math.abs(current - stop); // 1 sec per floor
        eta += 2; // 2 sec wait at each stop
        current = stop;
    }

    return eta;
}

function getFloorLabel(floor) {
    switch (floor) {
        case 0:
            return 'Ground Floor';
        case 1:
            return '1st';
        case 2:
            return '2nd';
        case 3:
            return '3rd';
        default:
            return `${floor}th`;
    }
}

function getBestElevatorIndex(floor) {
    let bestIndex = 0;
    let minDistance = Infinity;

    elevators.forEach((elevator, index) => {
        let distance = 0;

        if (!elevator.isMoving && elevator.queue.length === 0) {
            distance = Math.abs(elevator.currentStorey - floor);
        } else {
            let storeyList = [elevator.currentStorey, ...elevator.queue];
            for (let i = 0; i < storeyList.length - 1; i++) {
                distance += Math.abs(storeyList[i + 1] - storeyList[i]);
            }
            const lastInQueue = elevator.queue.length > 0 ? elevator.queue[elevator.queue.length - 1] : elevator.currentStorey;
            distance += Math.abs(lastInQueue - floor) + 2;
        }

        if (distance < minDistance) {
            minDistance = distance;
            bestIndex = index;
        }
    });

    return [bestIndex, minDistance];
}

async function processElevatorQueue(elevator, index) {
    while (elevator.queue.length > 0) {
        const nextFloor = elevator.queue.shift();

        elevator.callingStory = nextFloor;
        elevator.isMoving = true;

        const distance = Math.abs(elevator.currentStorey - nextFloor);
        const waitTime = distance + 2; // movement time + 2s arrival wait
        for (let i = waitTime; i > distance; i--) {
            elevator.timerDisplay = `${i} sec${i > 1 ? 's' : ''}`;
            await wait(1000);
        }

        while (elevator.currentStorey !== nextFloor) {
            elevator.timerDisplay = `${Math.abs(elevator.currentStorey - nextFloor)} sec${Math.abs(elevator.currentStorey - nextFloor) > 1 ? 's' : ''}`;
            elevator.currentStorey += elevator.currentStorey < nextFloor ? 1 : -1;
            await wait(1000);
        }

        sound.play();

        // Arrived
        elevator.isMoving = false;
        elevator.timerDisplay = '';
        elevator.callingStory = null;

        callStates[nextFloor] = { status: 'arrived', label: 'Arrived' };
        elevator._arrived = true; // for green color

        await wait(2000);

        elevator._arrived = false;
        callStates[nextFloor] = { status: null, label: 'Call' };    }
}

function wait(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
}
</script>


<style scoped>
.container {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
    font-family: sans-serif;
}

.elevator-layout {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    margin-top: 20px;
}

.floor-labels,
.call-buttons {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 0 10px;
}

.floor-label,
.call-button {
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.floor-label {
    margin-bottom: 4px;
}

.call-button {
    width: 80px;
    background-color: #4caf50;
    color: white;
    border: none;
    cursor: pointer;
    margin: 2px 0;
    border-radius: 5px;
}

.call-button.waiting {
    background-color: #e74c3c;
    cursor: not-allowed;
}

.call-button.arrived {
    background-color: #2ecc71;
    color: black;
}

.elevator-column {
    display: flex;
    flex-direction: column;
    margin: 0 5px;
}

.elevator-cell {
    height: 50px;
    width: 50px;
    border: 1px solid #ccc;
    position: relative;
    margin-bottom: 4px;
}

.elevator-icon {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.elevator-icon.red {
    filter: brightness(0) saturate(100%) invert(18%) sepia(94%) saturate(6101%) hue-rotate(357deg) brightness(97%) contrast(121%);
}

.elevator-icon.green {
    filter: brightness(0) saturate(100%) invert(57%) sepia(94%) saturate(453%) hue-rotate(64deg) brightness(99%) contrast(87%);
}

.arrived-now .elevator-icon {
    filter: brightness(0) saturate(100%) invert(57%) sepia(94%) saturate(453%) hue-rotate(64deg) brightness(99%) contrast(87%);
}

.current-story {
    background-color: #ccc;
}

.moving:not(.current-story) {
    background-color: #ffe5e5;
}

.time-label {
    position: absolute;
    bottom: 2px;
    right: 2px;
    font-size: 10px;
    color: #c0392b;
}
</style>
