<head>
    <style type="text/css">
        .cc-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}
.visa{background-image:url(http://i.imgur.com/lXzJ1eB.png);}
.mastercard{background-image:url(http://i.imgur.com/SJbRQF7.png);}

.cc-selector input:active +.drinkcard-cc{opacity: .9;}
.cc-selector input:checked +.drinkcard-cc{
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:100px;height:70px;
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
    -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
       -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);
}
.drinkcard-cc:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
}

/* Extras */
a:visited{color:#888}
a{color:#444;text-decoration:none;}
p{margin-bottom:.3em;}
    </style>
</head>

<form>
    <p>Previously:</p>
    <div>
        <input id="a1" type="radio" name="a" value="visa" />
        <label for="a1">Visa</label><br/>
        <input id="a2" type="radio" name="a" value="mastercard" />
        <label for="a2">Mastercard</label>
    </div>
    <p>Now, with CSS3: </p>
    <div class="cc-selector">
        <input id="visa" type="radio" name="credit-card" value="visa" />
        <label class="drinkcard-cc visa" for="visa"></label>
        <input id="mastercard" type="radio" name="credit-card" value="mastercard" />
        <label class="drinkcard-cc mastercard"for="mastercard"></label>
    </div>
</form>
<small><a href="https://github.com/rcotrina94/icons">
    &copy; Icons by @rcotrina94 on Github</a></small>