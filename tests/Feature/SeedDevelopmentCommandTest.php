<?php

namespace Tests\Feature;

class SeedDevelopmentCommandTest extends BaseSeedCommand
{
    /**
     * Seed Command
     * @var string
     */
    public $seed_command = 'seed:dev';

    /**
     * List of Tables Required to be validate
     * @var array
     */
    public $tables = [
        'users',
    ];

    /**
     * Seed Class Name
     * @var string
     */
    public $seed_command_class = 'SeedDevelopmentCommand';

    /** @test */
    public function it_can_seed_data()
    {
        parent::it_can_seed_data();

        $this->assertDatabaseHas('users', [
            'email' => 'demo@app.com'
        ]);
    }
}
