<template>
    <div>
        <v-container class="mt-5">
            <h6>#invoice</h6>
            <h1>Thank You</h1>
            <v-card>
                <v-card-text>
                    <v-simple-table fixed-header height="300px">
                        <template v-slot:default>
                            <thead>
                                <tr>
                                    <th class="text-left">FoodName</th>
                                    <th class="text-left">Rrice</th>
                                    <th class="text-left">Quantity</th>
                                    <th class="text-left">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="items in invoice" :key="items.carts_id">
                                    <td>{{items.product_name}}</td>
                                    <td>${{items.price}}</td>
                                    <td>{{items.quantity}}</td>
                                    <td>${{items.price * items.quantity}}</td>
                                </tr>
                            </tbody>
                        </template>
                    </v-simple-table>
                    <div class="mt-4">
                        <h6>Total:${{subTotal}}</h6>
                    </div>
                </v-card-text>
            </v-card>
        </v-container>
    </div>
</template>
<script>
import Axios from 'axios';
// import kk from '../'
// import {mapActions, mapGetters} from 'vuex';
export default {
    name:'Thankyou',
    data:()=>({
        invoice:[],
        subTotal:''
    }),
    // computed: {...mapGetters(['getInvoice'])
        
    // },
    methods:{
        // ...mapActions(['fetchInvoice']),
        // getInovice(){

        // }
        async fetchInvoice(){
            let id = JSON.parse(localStorage.getItem('id'));
            console.log(id)
            let invoice = `http://driller.epizy.com/foodend/users/tet.php?id=${id}`;
            let invid = new FormData();
            invid.append('id',id);
            await Axios.get(invoice,invid).then(api => {
                this.invoice = api.data;
                let total = this.invoice.filter(tot => tot.price);
                let arrTot = new Array()
                arrTot;
                total.forEach(i => {
                    console.log(i.price);
                    arrTot = [...arrTot, i.price * i.quantity];
                });
                this.subTotal= arrTot.reduce((x,y)=>{
                        return x+y
                    });
                console.log(arrTot);
                console.log(this.invoice)
            }).catch(err => console.log(err))
        },
    },
    mounted() {
        this.fetchInvoice()
        // console.log(this.getInvoice)
    },
}
</script>
<style lang="css">
    
</style>