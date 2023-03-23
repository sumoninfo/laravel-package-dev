<?php

namespace SumonInfo\Installer\Controllers;

use Illuminate\Routing\Controller;
use SumonInfo\Installer\Helpers\DatabaseManager;

class DatabaseController extends Controller
{

    /**
     * @var DatabaseManager
     */
    private $databaseManager;

    /**
     * @param DatabaseManager $databaseManager
     */
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    /**
     * Migrate and seed the database.
     *
     * @return \Illuminate\View\View
     */
    public function database()
    {
        // Sometimes migration file and seed files may take more then 30 seconds so we are going to set it 0 that indicates
        // that there is no time limit for execution.

        set_time_limit(0);
        $response = $this->databaseManager->migrateAndSeed();

        return redirect()->route('final')
                         ->with(['message' => $response]);
    }
}
