$(document).ready(function(){
    $('select').formSelect();
  $('.sidenav').sidenav();
	$('#sidenav-1').sidenav({ edge: 'left' });
	$('#sidenav-2').sidenav({ edge: 'right' });

});


var app = new Vue({
  el:'#newDevice',
  data:{
    power:false,
    basic:{
      order_id:'',
      device_model:'',
      imei:'',
      storage:'',
      color:''
    },
    main:{
      wifi:'',
      frontCamera:'',
      proximity:'',
      cameraFlash:'',
      rearCamera:'',
      earSpeaker:'',
      vibration:'',
      muteButton:'',
      volumeButton:'',
      gps:'',
      bluetooth:'',
      magnetometer:'',
      accelerometer:'',
      call:'',
      appearance:'',
      earSpeaker:'',
      powerButton:'',
      simTray:'',
      lcd:'',
      touchScreen:'',
      touchID:'',
      earphone:'',
      microphone:'',
      charging:'',
      homeButton:'',
      loudSpeaker:'',
      chargeBattery:'',
      batteryLife:'',
      innerDust:'',
      turnOffDevice:'',
      updateLatest:'',
      warrantySticker:''
    },
  },

  computed:{
    isDisabled:function(){
      return !this.power
    },
    test:function(){

    }
  },
  methods:{
    test:function(){
      this.aa ++;

      if(this.power == false){

         for(var prop in this.main){
           if(this.main.hasOwnProperty(prop)){
             this.main[prop] = 0;
           }
         }

      }
    }
  }
})
