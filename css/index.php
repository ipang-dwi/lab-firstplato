<body bgcolor="black"><center>
<p><b><font color="gold"><img src="https://www.firstplato.com/img/kaskus.gif"></br></br> Hayo mau ngapain.. </br>You will be redirected in <h2><span id="counter">10</span></h2> second(s).</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = '../';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>