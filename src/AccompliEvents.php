<?php

namespace Accompli;

/**
 * AccompliEvents
 *
 * @author  Niels Nijens <nijens.niels@gmail.com>
 * @package Accompli
 **/
final class AccompliEvents
{
    /**
     * The DEPLOY_DEPLOYMENT event is dispatched when a Release is ready for deployment.
     *
     * The event listener receives an
     * Accompli\Event\DeployDeploymentEvent instance.
     *
     * @var string
     **/
    const DEPLOY_DEPLOYMENT = 'accompli.deploy_deployment';

    /**
     * The DEPLOYMENT_COMPLETE event is dispatched when a Release succesfully deployed.
     *
     * The event listener receives an
     * Accompli\Event\DeploymentCompleteEvent instance.
     *
     * @var string
     **/
    const DEPLOYMENT_COMPLETE = 'accompli.deployment_complete';

    /**
     * The DEPLOYMENT_FAILED event is dispatched when deployment of a Release has failed.
     *
     * The event listener receives an
     * Accompli\Event\DeploymentFailedEvent instance.
     *
     * @var string
     **/
    const DEPLOYMENT_FAILED = 'accompli.deployment_failed';

    /**
     * The GATHER_FACTS event is dispatched when information from a host is required.
     *
     * The event listener receives an
     * Accompli\Event\GatherFactsEvent instance.
     *
     * @var string
     **/
    const GATHER_FACTS = 'accompli.gather_facts';

    /**
     * The INSTALL_RELEASE event is dispatched when a Release requires installation.
     *
     * The event listener receives an
     * Accompli\Event\InstallReleaseEvent instance.
     *
     * @var string
     **/
    const INSTALL_RELEASE = 'accompli.install_release';

    /**
     * The PREPARE_DEPLOYMENT event is dispatched when a Release is prepared for deployment.
     *
     * The event listener receives an
     * Accompli\Event\PrepareDeploymentEvent instance.
     *
     * @var string
     **/
    const PREPARE_DEPLOYMENT = 'accompli.prepare_deployment';

    /**
     * The PREPARE_RELEASE event is dispatched when a Release is being prepared.
     *
     * The event listener receives an
     * Accompli\Event\PrepareReleaseEvent instance.
     *
     * @var string
     **/
    const PREPARE_RELEASE = 'accompli.prepare_release';

    /**
     * The PREPARE_WORKSPACE event is dispatched when a server or local path is being prepared for deployments.
     *
     * The event listener receives an
     * Accompli\Event\PrepareWorkspaceEvent instance.
     *
     * @var string
     **/
    const PREPARE_WORKSPACE = 'accompli.prepare_workspace';

    /**
     * The ROLLBACK_DEPLOYMENT event is dispatched when a previous Release is being deployed.
     *
     * The event listener receives an
     * Accompli\Event\RollbackDeploymentEvent instance.
     *
     * @var string
     **/
    const ROLLBACK_DEPLOYMENT = 'accompli.rollback_deployment';

    /**
     * The ROLLBACK_DEPLOYMENT_COMPLETE event is dispatched when a previous Release is successfully deployed.
     *
     * The event listener receives an
     * Accompli\Event\RollbackDeploymentCompleteEvent instance.
     *
     * @var string
     **/
    const ROLLBACK_DEPLOYMENT_COMPLETE = 'accompli.rollback_deployment_complete';

    /**
     * The ROLLBACK_DEPLOYMENT_FAILED event is dispatched when deployment of a previous Release has failed.
     *
     * The event listener receives an
     * Accompli\Event\RollbackDeploymentFailedEvent instance.
     *
     * @var string
     **/
    const ROLLBACK_DEPLOYMENT_FAILED = 'accompli.rollback_deployment_failed';
}
