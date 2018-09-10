


var confirm = null;
function showConfirm(title,body,confirm_f){    
    document.getElementById('alert-confirm-title').innerHTML = title;
    document.getElementById('alert-confirm-body').innerHTML = body;
    document.getElementById('alert-confirm').style.display='block';
    confirm = confirm_f;
}
function hideConfirm(){   
     document.getElementById('alert-confirm').style.display='none';
     confirm= null;
}   
function confirmSuccess(){
    if(confirm!=null  && typeof(confirm) === 'function'){
        confirm();
    }
    confirm = null;
}
(function(){
   document.getElementById('alert-exit-btn').addEventListener('click',hideConfirm);
   document.getElementById('alert-confirm-btn').addEventListener('click',confirmSuccess);
})();

