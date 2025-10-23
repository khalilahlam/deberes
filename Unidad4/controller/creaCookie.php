<?php

function creaCookie($nombre,$valor) {
    setCookie(name: $nombre,$valor,time()+7200,'/');
}