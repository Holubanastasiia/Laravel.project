<?php

test('test about page', function () {
    $response = $this->get('/about');

    $response->assertStatus(200);
});
