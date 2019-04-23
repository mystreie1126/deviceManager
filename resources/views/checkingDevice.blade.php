@extends('template')
@include('_includes.sideNav')

@section('content')

@if(Auth::check())

<h4 class="center">New Devices</h4>
<form id="newDevice">

    {{-- first row.... --}}


  <div class="first-line device_details_line row">
    <h5 class="indigo-text">Basic information</h5>
          <div class="switch col s6">
            <div class="turn_on">Power on:</div>
             <label>
               No
               <input type="checkbox" v-model="power" @change="test" >
               <span class="lever"></span>
               Yes
             </label>
         </div>

         <div class="switch">
           <label>
             Off
             <input type="checkbox" :disabled="isDisabled">
             <span class="lever"></span>
             On
           </label>
         </div>

         <div class="input-field col s6">
             <input placeholder="Device Order ID" id="device_orderID" type="number" class="validate" v-model="basic.order_id">
             <label for="device_orderID">Order ID</label>
             @{{aa}}
         </div>



         <div class="input-field col s4">
             <input placeholder="Device Model" id="device_model" type="text" class="validate" v-model="basic.device_model">
             <label for="device_model">Model</label>
         </div>

        <div class="input-field col s4">
            <input id="IMEI" type="text" class="validate" placeholder="Device IMEI" v-model="basic.imei">
            <label for="IMEi">IMEI</label>
          </div>

        <div class="input-field col s4">
          <h3>some shit</h3>
          <select :disabled='isDisabled' class="device_status" v-model="basic.storage">
            <option value="" disabled selected>Storage</option>
            <option value="1">256GB</option>
            <option value="1">128GB</option>
            <option value="3">64GB</option>
            <option value="3">32GB</option>
          </select>
          <label>Select Storage</label>
        </div>
  </div>



    {{-- second row ... --}}
<div class="second-line device_details_line row">
   <h5 class="indigo-text">Front and back Top</h5>
    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.wifi">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>

        <label>Wifi</label>
    </div>

    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.frontCamera">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>
        <label>Front Camera</label>
    </div>

    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.proximity">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>
        <label>Proximity</label>
    </div>

    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.cameraFlash">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>
        <label>Camera Flash</label>
    </div>

    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.rearCamera">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>
        <label>Rear Camera</label>
    </div>

    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.earSpeaker">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>
        <label>Ear Speaker</label>
    </div>
</div>

      {{-- third row ... --}}
<div class="third-line device_details_line row">
   <h5 class="indigo-text">Left Side</h5>
    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.vibration">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>
        <label>Vibration</label>
    </div>

    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.muteButton">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>
        <label>Mute Button</label>
    </div>

    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.volumeButton">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>
        <label>Volume Button</label>
    </div>


    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.gps">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>
        <label>GPS</label>
    </div>

    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.bluetooth">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>
        <label>Bluetooth</label>
    </div>

    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.magnetometer">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>
        <label>Magnetometer</label>
    </div>

    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.accelerometer">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>
        <label>Accelerometer</label>
    </div>

    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.call">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>
        <label>Call</label>
    </div>

    <div class="input-field col s3">
      <select :disabled="isDisabled" class="device_status" v-model="main.appearance">
        <option value="" disabled selected> Status</option>
        <option value="0">Working</option>
        <option value="1">Not Working</option>
      </select>
        <label>Appearance</label>
    </div>
</div>

<div class="forth-line device_details_line row">
   <h5 class="indigo-text">Right Side</h5>
   <div class="input-field col s3">
     <select :disabled="isDisabled" class="device_status" v-model="main.earSpeaker">
       <option value="" disabled selected> Status</option>
       <option value="0">Working</option>
       <option value="1">Not Working</option>
     </select>
       <label>Ear Speaker</label>
   </div>

   <div class="input-field col s3">
     <select :disabled="isDisabled" class="device_status" v-model="main.powerButton">
       <option value="" disabled selected> Status</option>
       <option value="0">Working</option>
       <option value="1">Not Working</option>
     </select>
       <label>Power Button</label>
   </div>

   <div class="input-field col s3">
     <select :disabled="isDisabled" class="device_status" v-model="main.simTray">
       <option value="" disabled selected> Status</option>
       <option value="0">Working</option>
       <option value="1">Not Working</option>
     </select>
       <label>SIM Tray</label>
   </div>

   <div class="input-field col s3">
     <select :disabled="isDisabled" class="device_status" v-model="main.lcd">
       <option value="" disabled selected> Status</option>
       <option value="0">Working</option>
       <option value="1">Not Working</option>
     </select>
       <label>LCD</label>
   </div>

   <div class="input-field col s3">
     <select :disabled="isDisabled" class="device_status" v-model="main.touchScreen">
       <option value="" disabled selected> Status</option>
       <option value="0">Working</option>
       <option value="1">Not Working</option>
     </select>
       <label>TouchScreen</label>
   </div>
</div>

<div class="fifth-line device_details_line row">
  <h5 class="indigo-text">Bottom</h5>
  <div class="input-field col s3">
    <select :disabled="isDisabled" class="device_status" v-model="main.earphone">
      <option value="" disabled selected> Status</option>
      <option value="0">Working</option>
      <option value="1">Not Working</option>
    </select>
      <label>Earphone</label>
  </div>

  <div class="input-field col s3">
    <select :disabled="isDisabled" class="device_status" v-model="main.microphone">
      <option value="" disabled selected> Status</option>
      <option value="0">Working</option>
      <option value="1">Not Working</option>
    </select>
      <label>Microphone</label>
  </div>

  <div class="input-field col s3">
    <select :disabled="isDisabled" class="device_status" v-model="main.charging">
      <option value="" disabled selected> Status</option>
      <option value="0">Working</option>
      <option value="1">Not Working</option>
    </select>
      <label>Device Charging</label>
  </div>

  <div class="input-field col s3">
    <select :disabled="isDisabled" class="device_status" v-model="main.homeButton">
      <option value="" disabled selected> Status</option>
      <option value="0">Working</option>
      <option value="1">Not Working</option>
    </select>
      <label>Home Button</label>
  </div>

  <div class="input-field col s3">
    <select :disabled="isDisabled" class="device_status" v-model="main.loudSpeaker">
      <option value="" disabled selected> Status</option>
      <option value="0">Working</option>
      <option value="1">Not Working</option>
    </select>
      <label>Loud Speaker</label>
  </div>

</div>

<div class="sixth-line device_details_line row">
  <h5 class="green-text">Others</h5>
  <div class="input-field col s3">
    <select :disabled="isDisabled" class="device_status" v-model="main.chargeBattery">
      <option value="" disabled selected>Status</option>
      <option value="0">Tested</option>
      <option value="1">Not yet</option>
    </select>
      <label>Charge Battery to 100%</label>
  </div>

  <div class="input-field col s3">
    <select :disabled="isDisabled" class="device_status" v-model="main.batteryLife">
      <option value="" disabled selected>Status</option>
      <option value="0">Tested</option>
      <option value="1">Not yet</option>
    </select>
      <label>Battery life test</label>
  </div>

  <div class="input-field col s3">
    <select :disabled="isDisabled" class="device_status" v-model="main.innerDust">
      <option value="" disabled selected>Status</option>
      <option value="0">Tested</option>
      <option value="1">Not yet</option>
    </select>
      <label>Clean inner dust</label>
  </div>

  <div class="input-field col s3">
    <select :disabled="isDisabled" class="device_status" v-model="main.turnOffDevice">
      <option value="" disabled selected>Status</option>
      <option value="0">Tested</option>
      <option value="1">Not yet</option>
    </select>
      <label>Turn Off the Device</label>
  </div>

  <div class="input-field col s3">
    <select :disabled="isDisabled" class="device_status" v-model="main.updateLatest">
      <option value="" disabled selected>Status</option>
      <option value="0" class="green-text">Tested</option>
      <option value="1">Not yet</option>
    </select>
      <label>Update to the latest Version</label>
  </div>

  <div class="input-field col s9">
    <select :disabled="isDisabled" class="device_status" v-model="main.warrantySticker">
      <option value="" disabled selected class="red-text">Status</option>
      <option value="0">Tested</option>
      <option value="1">Not yet</option>
    </select>
      <label>Funtech Warrantly Sticker on Screen Connectior Panel and Battery</label>
  </div>

</div>
</form>
@endif

@stop
