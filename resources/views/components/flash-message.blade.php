@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="flash-message">
  <style>
      .flash-message{
          background: rgb(20, 180, 20);
          color: white;
          text-align: center;
          position: absolute;
          top: 0;
          width: 100%;
      }
  </style>
  <p style="padding: 1rem">
    {{session('message')}}
  </p>
</div>
@endif