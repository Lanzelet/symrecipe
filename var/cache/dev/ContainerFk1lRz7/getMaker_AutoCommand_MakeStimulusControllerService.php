<?php

namespace ContainerFk1lRz7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeStimulusControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.auto_command.make_stimulus_controller' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeStimulusController.php';

        $container->privates['maker.auto_command.make_stimulus_controller'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeStimulusController(), ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')));

        $instance->setName('make:stimulus-controller');
        $instance->setDescription('Creates a new Stimulus controller');

        return $instance;
    }
}
