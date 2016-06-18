<?php

use MyApp\Main;

describe('Main test', function() {
    beforeEach(function() {
        $this->main = new Main(); // ここでの実行結果とかitに渡したい場合、thisに設定する。
    });

    describe('->run()', function() {
        it('should return the "hello!!"', function() {
            assert($this->main->run() === 'hello!!');
        });
    });
});
