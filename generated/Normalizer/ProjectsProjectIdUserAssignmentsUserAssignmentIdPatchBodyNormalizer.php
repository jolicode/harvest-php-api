<?php

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody();
        if (property_exists($data, 'is_active') && $data->{'is_active'} !== null) {
            $object->setIsActive($data->{'is_active'});
        }
        elseif (property_exists($data, 'is_active') && $data->{'is_active'} === null) {
            $object->setIsActive(null);
        }
        if (property_exists($data, 'is_project_manager') && $data->{'is_project_manager'} !== null) {
            $object->setIsProjectManager($data->{'is_project_manager'});
        }
        elseif (property_exists($data, 'is_project_manager') && $data->{'is_project_manager'} === null) {
            $object->setIsProjectManager(null);
        }
        if (property_exists($data, 'use_default_rates') && $data->{'use_default_rates'} !== null) {
            $object->setUseDefaultRates($data->{'use_default_rates'});
        }
        elseif (property_exists($data, 'use_default_rates') && $data->{'use_default_rates'} === null) {
            $object->setUseDefaultRates(null);
        }
        if (property_exists($data, 'hourly_rate') && $data->{'hourly_rate'} !== null) {
            $object->setHourlyRate($data->{'hourly_rate'});
        }
        elseif (property_exists($data, 'hourly_rate') && $data->{'hourly_rate'} === null) {
            $object->setHourlyRate(null);
        }
        if (property_exists($data, 'budget') && $data->{'budget'} !== null) {
            $object->setBudget($data->{'budget'});
        }
        elseif (property_exists($data, 'budget') && $data->{'budget'} === null) {
            $object->setBudget(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getIsActive()) {
            $data->{'is_active'} = $object->getIsActive();
        }
        else {
            $data->{'is_active'} = null;
        }
        if (null !== $object->getIsProjectManager()) {
            $data->{'is_project_manager'} = $object->getIsProjectManager();
        }
        else {
            $data->{'is_project_manager'} = null;
        }
        if (null !== $object->getUseDefaultRates()) {
            $data->{'use_default_rates'} = $object->getUseDefaultRates();
        }
        else {
            $data->{'use_default_rates'} = null;
        }
        if (null !== $object->getHourlyRate()) {
            $data->{'hourly_rate'} = $object->getHourlyRate();
        }
        else {
            $data->{'hourly_rate'} = null;
        }
        if (null !== $object->getBudget()) {
            $data->{'budget'} = $object->getBudget();
        }
        else {
            $data->{'budget'} = null;
        }
        return $data;
    }
}