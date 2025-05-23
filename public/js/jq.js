$(document).ready(function () {
    const numFloors = 10;
    const numElevators = 5;
    const floorTime = 2000; // 2s per floor
    const stopDelay = 2000; // 2s stop delay

    const $floorLabels = $('.floor-labels');
    const $elevatorColumns = $('.elevator-columns');
    const $callButtons = $('.call-buttons');

    const elevators = [];
    const sound = new Audio('https://actions.google.com/sounds/v1/cartoon/clang_and_wobble.ogg');

    // UI setup
    for (let floor = numFloors; floor >= 1; floor--) {
        $floorLabels.append(`<div class="floor-label">${getFloorLabel(floor - 1)}</div>`);
        $callButtons.append(`<button class="call-button" data-floor="${floor}">Call</button>`);
    }

    for (let i = 0; i < numElevators; i++) {
        const elevator = {
            id: i,
            currentFloor: 1,
            targetFloor: 0,
            queue: [],
            isMoving: false,
            $column: $('<div class="elevator-column"></div>'),
            $icon: $(`
                      <div class="elevator-wrapper">
                        <img src="images/icons8-elevator.svg?174728f9202f2ccbdd154792c544e84f" class="elevator-icon" />
                        <div id="symbol${i}" class="elevator-symbol"></div>
                      </div>`
            )
        };

        for (let floor = numFloors; floor >= 1; floor--) {
            const $cell = $(`<div class="elevator-cell" data-floor="${floor}"></div>`);
            if (floor === 1) {
                $cell.append(elevator.$icon);
            }
            elevator.$column.append($cell);
        }

        elevators.push(elevator);
        $elevatorColumns.append(elevator.$column);
    }

    $('.call-button').click(function () {
        const targetFloor = parseInt($(this).data('floor'));
        const $button = $(this);

        if ($button.hasClass('waiting')) return;
        $button.addClass('waiting').text('Waiting...');

        const {elevator: bestElevator, time} = findBestElevator(targetFloor);
        // Display time in the cell of the chosen elevator
        const $targetCell = bestElevator.$column.find(`.elevator-cell[data-floor="${targetFloor}"]`);
        $targetCell.find('.time-label').remove(); // clear previous
        const seconds = Math.ceil(time / 1000);
        $targetCell.append(`<div class="time-label">${seconds}s</div>`);

        bestElevator.queue.push({floor: targetFloor, button: $button});

        if (!bestElevator.isMoving) {
            processQueue(bestElevator);
        }
    });

    function findBestElevator(targetFloor) {
        let minTime = Infinity;
        let chosenElevator = null;

        elevators.forEach(elevator => {
            let simFloor = elevator.currentFloor;
            let time = 0;
            if(elevator.isMoving) {
                time = Math.abs(simFloor - elevator.targetFloor) * floorTime;
            }

            elevator.queue.forEach(q => {
                time += Math.abs(simFloor - q.floor) * floorTime + stopDelay;
                simFloor = q.floor;
            });

            time += Math.abs(simFloor - targetFloor) * floorTime + stopDelay;

            if (time < minTime) {
                minTime = time;
                chosenElevator = elevator;
            }
        });

        return {elevator: chosenElevator, time: minTime};
    }

    function processQueue(elevator) {
        if (elevator.queue.length === 0) {
            elevator.isMoving = false;
            return;
        }

        elevator.isMoving = true;
        const next = elevator.queue.shift();
        elevator.targetFloor = next.floor;
        const $button = next.button;
        const moveDirection = elevator.targetFloor > elevator.currentFloor ? 1 : -1;

        const $icon = elevator.$icon;
        $icon.find('img').removeClass('green').addClass('red');

        const step = () => {
            if (elevator.currentFloor === elevator.targetFloor) {
                // Arrived
                const $targetCell = elevator.$column.find(`.elevator-cell[data-floor="${elevator.currentFloor}"]`);
                $targetCell.append($icon);
                $icon.find('img').removeClass('red').addClass('green');

                // Remove time label when elevator arrives
                $targetCell.find('.time-label').remove();

                $button.removeClass('waiting').addClass('arrived').text('Arrived!');
                sound.play();

                setTimeout(() => {
                    $icon.find('img').removeClass('green');
                    $button.removeClass('arrived').text('Call');
                    setTimeout(() => processQueue(elevator), stopDelay); // Move to next in queue
                }, stopDelay);
                return;
            }

            elevator.currentFloor += moveDirection;
            let symbol = "↓"
            if (moveDirection > 0) {
                symbol = "↑";
            }
            $("#symbol" + elevator.id).html(symbol);

            const $nextCell = elevator.$column.find(`.elevator-cell[data-floor="${elevator.currentFloor}"]`);
            elevator.$column.find('.elevator-cell').each(function () {
                $(this).find('.elevator-wrapper').remove();
            });
            $nextCell.append($icon);

            setTimeout(step, floorTime);
        };

        setTimeout(step, floorTime);
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
});
