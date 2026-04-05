<?php
use core\container;
test('it can resolve something out of the container', function () {
    // arrange
    $container = new Container();

    $container->bind('foo', fn()=>'bar') ;
       $result=$container->resolve('foo');
       expect($result)->toEqual('bar');
   

    // act
    // assert/expect
});
