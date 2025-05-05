<?php $this->layout("master", ['title'=> "Contato"]); ?>

<h1>Contact</h1>

<form action="/contact" method="post">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="name">
    <button type="submit">Enviar</button>
</form>