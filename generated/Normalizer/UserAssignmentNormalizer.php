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
class UserAssignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\UserAssignment';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\UserAssignment';
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
        $object = new \JoliCode\Harvest\Api\Model\UserAssignment();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'project') && $data->{'project'} !== null) {
            $object->setProject($this->denormalizer->denormalize($data->{'project'}, 'JoliCode\\Harvest\\Api\\Model\\UserAssignmentProject', 'json', $context));
        }
        elseif (property_exists($data, 'project') && $data->{'project'} === null) {
            $object->setProject(null);
        }
        if (property_exists($data, 'user') && $data->{'user'} !== null) {
            $object->setUser($this->denormalizer->denormalize($data->{'user'}, 'JoliCode\\Harvest\\Api\\Model\\UserAssignmentUser', 'json', $context));
        }
        elseif (property_exists($data, 'user') && $data->{'user'} === null) {
            $object->setUser(null);
        }
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
        if (property_exists($data, 'created_at') && $data->{'created_at'} !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'created_at'}));
        }
        elseif (property_exists($data, 'created_at') && $data->{'created_at'} === null) {
            $object->setCreatedAt(null);
        }
        if (property_exists($data, 'updated_at') && $data->{'updated_at'} !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'updated_at'}));
        }
        elseif (property_exists($data, 'updated_at') && $data->{'updated_at'} === null) {
            $object->setUpdatedAt(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        else {
            $data->{'id'} = null;
        }
        if (null !== $object->getProject()) {
            $data->{'project'} = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        else {
            $data->{'project'} = null;
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        else {
            $data->{'user'} = null;
        }
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
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        else {
            $data->{'created_at'} = null;
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:sP");
        }
        else {
            $data->{'updated_at'} = null;
        }
        return $data;
    }
}