const btn = document.getElementById('create_room');
const txt = document.getElementById('txt');
btn.addEventListener('click',function () {
   'use strict';
   if (confirm('部屋を作成しますか')) {
    document.getElementById('room').submit();
   }
  } )