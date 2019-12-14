class Errors{
	constructor(){
		this.errors={};
	}
	get(field){
		if(this.errors[field]){
			return this.errors[field][0];
		}
	}
	record(errors){
		this.errors=errors;
	}
}
new Vue({
	el:'#app',
	data:{
		email:'',
		password:'',
		errors:new Errors()
	},
	methods:{
		onSubmit(){
			axios.post('/storedatas',{
				email:this.email,
				password:this.password
			}).then(response=>alert('Successfully')).catch(error=>this.errors.record(error.response.data));
		}
	}
});