const btn = document.getElementById('btn');
const txt = document.getElementById('txt');
btn.addEventListener('click',function () {
   'use strict';
   if (confirm('変更しますか')) {
    document.getElementById('my_page').submit();
   }
  } )

const keep = document.getElementById('keep');
const txt1 = document.getElementById('txt1');
keep.addEventListener('click',function () {
   'use strict';
   if (confirm('保存しますか')) {
       console.log(document.getElementById('icon'));
    document.getElementById('icon').submit();
   }
  } )
