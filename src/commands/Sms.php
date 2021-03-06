<?php
/**
 * @author    : Death-Satan
 * @date      : 2021/8/20
 * @createTime: 11:20
 * @company   : Death撒旦
 * @link      https://www.cnblogs.com/death-satan
 */


namespace SaTan\Think\Sms\commands;


use think\console\command\Make;
use think\console\input\Argument;

class Sms extends Make
{
    protected $type = "Sms";
    protected function configure ()
    {
        parent::configure(); // TODO: Change the autogenerated stub
        $this->setName('make:sms')
            ->addArgument('smsName', Argument::OPTIONAL, "The name of the sms")
            ->setDescription('Create a new Sms class');
    }
    protected function buildClass(string $name): string
    {
        $smsName = $this->input->getArgument('smsName') ?: strtolower(basename($name));
        $namespace   = trim(implode('\\', array_slice(explode('\\', $name), 0, -1)), '\\');

        $class = str_replace($namespace . '\\', '', $name);
        $stub  = file_get_contents($this->getStub());

        return str_replace(['{%smsName%}', '{%className%}', '{%namespace%}', '{%app_namespace%}'], [
            $smsName,
            $class,
            $namespace,
            $this->app->getNamespace(),
        ], $stub);
    }

    protected function getStub(): string
    {
        return __DIR__ . DIRECTORY_SEPARATOR . 'stubs' . DIRECTORY_SEPARATOR . 'sms.stub';
    }

    protected function getNamespace(string $app): string
    {
        return parent::getNamespace($app) . '\\sms';
    }
}