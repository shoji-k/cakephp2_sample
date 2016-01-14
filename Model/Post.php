<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class Post extends AppModel {

    /**
     * 一覧表示時のタイトルに使用するカラム名
     *
     * @var string
     */
    public $displayField = 'title';

    /**
     * バリデーションルール
     *
     * @var array
     */
    public $validate = [
        'title' => [
            'notBlank' => [
                'rule' => ['notBlank'],
                'message' => 'タイトルは必須入力です',
            ],
            'maxLength' => [
                'rule' => ['maxLength', '255'],
                'message' => 'タイトルは255文字以内で入力してください',
            ],
        ],
    ];
}
