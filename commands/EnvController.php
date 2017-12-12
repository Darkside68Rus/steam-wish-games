<?php

namespace app\commands;

use yii\console\Controller;

/**
 * Class EnvCommand
 * @package app\commands
 */
class EnvController extends Controller
{
    protected $files = [
        'common-local.php' => [],
        'console-local.php' => [],
        'db-local.php' => [
            'dsn' => 'mysql:host=localhost;dbname=yii2basic',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'params-local.php' => [],
        'web-local.php' => [],
    ];

    /**
     * Create a local environment configuration files
     * @param bool $forceWrite
     */
    public function actionInit($forceWrite = false)
    {
        foreach ($this->files as $fileName => $configuration) {
            $this->stdout($fileName . ': ');
            if (!file_exists(__DIR__ . '/../config/' . $fileName) || $forceWrite) {
                $this->stdout(
                    file_put_contents(
                        __DIR__ . '/../config/' . $fileName,
                        "<?php\n\nreturn " . var_export($configuration, true) . ";\n"
                    )
                    ? 'Success'
                    : 'Error'
                );
            } else {
                $this->stdout('Skipped');
            }
            $this->stdout(PHP_EOL);
        }
    }
}
