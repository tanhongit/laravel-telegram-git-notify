<?php

return [
    'completed' => [
        'success' => [
            'title' => '🎉 <b>Workflow Completed</b> from 🦑 :user',
            'body' => 'Done workflow: 🎉 <b>:name</b> ✨ ',
        ],
        'failure' => [
            'title' => '🚫 <b>Workflow Failed</b> from 🦑:user',
            'body' => 'Failed workflow: 🚫 <b>:name</b> ❌',
        ],
        'cancelled' => [
            'title' => '❌ <b>Workflow Cancelled</b> from 🦑 :user',
            'body' => 'Cancelled workflow: 🚨 <b>:name</b> ❌ ',
        ],
        'default' => [
            'title' => "🚨 <b>Workflow Can't Success</b> from 🦑:user",
            'body' => "Can't Success workflow: 🚨 <b>:name</b> ❌",
        ],
    ],
    'requested' => [
        'title' => ' <b>Workflow Requested</b> from 🦑:user',
        'body' => 'Running workflow: 💥 <b>:name</b> ⏳',
    ],
    'link' => '🔗 Workflow run link: :link',
];
