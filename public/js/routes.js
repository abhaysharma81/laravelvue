Vue.component('coupon',{
	props:['code'],
	template:`
		<input type="text" :value="code" @input="updateCode($event.target.value)"/>
	`,
	data(){
		return {
			invalids:['abhay','Someting was wrong type again'],
		}
	},
		methods:{
		updateCode(code){
			if(this.invalids.includes(code)){
				alert('this is wrong');
				this.$refs.input.value=code='';
			}
			this.$emit('input',code);
		}
	}
})
new Vue({
	el:'#app',
	data:{
		coupon:'it Free',
		method:this.updateCode
	}
})