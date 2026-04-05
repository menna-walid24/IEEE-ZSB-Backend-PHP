<?php
use core\validator;
it('validates a string',function(){
expect(validator::string('foobar'))->toBeTrue();
expect(validator::string(''))->toBeFalse();
});
it('validates a string with a minimum length',function(){
expect(validator::string('foobar',20))->toBeFalse();

});
it('validates an email',function(){
expect(validator::email('foobar'))->toBeFalse();
expect(validator::email('foobar@example.com'))->toBeTrue();
});
it('validates that a number is greater than a given amount',function(){
expect(validator::greaterThan(10,1))->toBeTrue();
expect(validator::greaterThan(10,100))->toBeFalse();
})->only();