<template>
    <h1>table and calculations</h1>
    <slot></slot>
        <table class="table table-striped">
            <tr>
                <th v-for="head in headers" :key="head">
                    <p v-if="head == '+'">
                        <button type="button" class="btn btn-primary" @click="addNew">{{ head }}</button>
                    </p>
                    <p v-else>
                        {{ head }}
                    </p>
                </th>
            </tr>
            <tr v-for="tr in trs" :key="tr">
                <td v-for="td in tr"  :key="td">
                    {{ td }}
                </td>
            </tr>
        </table>
</template>

<script>

export default {
    props: ['features'],
    data() {
        return {
            headers:
                ['id', 'name', 'description', '+'],
            trs: [],
            tds: [2,3,4]
        }
    },
    components: {},
    methods: {
        addNew(){
            const tmp = [];
            this.tds.forEach((value,index)=>{
                const dbl =  value * 2
                this.tds[index] = dbl;
                tmp.push(dbl)
            })
             this.trs.push(tmp);
        }
    }
}
</script>


<style scoped>
h1 {
    background-color: #0b2e13;
    font-size: 1.4em;
    color: #2fff8a;
    padding: 10px;
    margin:5px;
}
</style>
