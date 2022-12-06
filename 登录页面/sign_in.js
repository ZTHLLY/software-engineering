var can_show=document.getElementById('can_show');
var get_pass=document.getElementById('get_pass');
var flag=0
get_pass.onclick=function(){
    if(flag==0){
        can_show.type='text';
        flag=1;
    } 
    else
    {
        can_show.type='password';
        flag=0;
    } 
}

var text=document.querySelector('.request');

can_show.onblur=function(){

    if(this.value.length==0)
    {
        
        text.innerHTML='请输入6~16位密码';
    } 

    else if(this.value.length<6||this.value.length>16)
    {
        text.className='request wrong';
        text.innerHTML='输入的位数不符合要求';
    }



    else{
        text.className='request right';
        text.innerHTML='密码位数符合要求';
    }
}
