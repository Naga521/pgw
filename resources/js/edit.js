const btn = document.getElementById('btn');
const txt = document.getElementById('txt');
btn.addEventListener('click', function() {
    const choice = window.confirm('変更しますか');
    if(choice) {
        txt.textContent = '変更しました';
    } else{
        txt.textContent = '変更キャンセル';
    }
    })
