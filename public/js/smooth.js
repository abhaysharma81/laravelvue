new Vue({
	el:'#app',
	methods:{
		scrollTo(selector){
			document.querySelector(selector).scrollIntoView({behavior:'smooth'});
		}
	}
});