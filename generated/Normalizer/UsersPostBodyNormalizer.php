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
class UsersPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\UsersPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\UsersPostBody';
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
        $object = new \JoliCode\Harvest\Api\Model\UsersPostBody();
        if (property_exists($data, 'first_name') && $data->{'first_name'} !== null) {
            $object->setFirstName($data->{'first_name'});
        }
        elseif (property_exists($data, 'first_name') && $data->{'first_name'} === null) {
            $object->setFirstName(null);
        }
        if (property_exists($data, 'last_name') && $data->{'last_name'} !== null) {
            $object->setLastName($data->{'last_name'});
        }
        elseif (property_exists($data, 'last_name') && $data->{'last_name'} === null) {
            $object->setLastName(null);
        }
        if (property_exists($data, 'email') && $data->{'email'} !== null) {
            $object->setEmail($data->{'email'});
        }
        elseif (property_exists($data, 'email') && $data->{'email'} === null) {
            $object->setEmail(null);
        }
        if (property_exists($data, 'timezone') && $data->{'timezone'} !== null) {
            $object->setTimezone($data->{'timezone'});
        }
        elseif (property_exists($data, 'timezone') && $data->{'timezone'} === null) {
            $object->setTimezone(null);
        }
        if (property_exists($data, 'has_access_to_all_future_projects') && $data->{'has_access_to_all_future_projects'} !== null) {
            $object->setHasAccessToAllFutureProjects($data->{'has_access_to_all_future_projects'});
        }
        elseif (property_exists($data, 'has_access_to_all_future_projects') && $data->{'has_access_to_all_future_projects'} === null) {
            $object->setHasAccessToAllFutureProjects(null);
        }
        if (property_exists($data, 'is_contractor') && $data->{'is_contractor'} !== null) {
            $object->setIsContractor($data->{'is_contractor'});
        }
        elseif (property_exists($data, 'is_contractor') && $data->{'is_contractor'} === null) {
            $object->setIsContractor(null);
        }
        if (property_exists($data, 'is_admin') && $data->{'is_admin'} !== null) {
            $object->setIsAdmin($data->{'is_admin'});
        }
        elseif (property_exists($data, 'is_admin') && $data->{'is_admin'} === null) {
            $object->setIsAdmin(null);
        }
        if (property_exists($data, 'is_project_manager') && $data->{'is_project_manager'} !== null) {
            $object->setIsProjectManager($data->{'is_project_manager'});
        }
        elseif (property_exists($data, 'is_project_manager') && $data->{'is_project_manager'} === null) {
            $object->setIsProjectManager(null);
        }
        if (property_exists($data, 'can_see_rates') && $data->{'can_see_rates'} !== null) {
            $object->setCanSeeRates($data->{'can_see_rates'});
        }
        elseif (property_exists($data, 'can_see_rates') && $data->{'can_see_rates'} === null) {
            $object->setCanSeeRates(null);
        }
        if (property_exists($data, 'can_create_projects') && $data->{'can_create_projects'} !== null) {
            $object->setCanCreateProjects($data->{'can_create_projects'});
        }
        elseif (property_exists($data, 'can_create_projects') && $data->{'can_create_projects'} === null) {
            $object->setCanCreateProjects(null);
        }
        if (property_exists($data, 'can_create_invoices') && $data->{'can_create_invoices'} !== null) {
            $object->setCanCreateInvoices($data->{'can_create_invoices'});
        }
        elseif (property_exists($data, 'can_create_invoices') && $data->{'can_create_invoices'} === null) {
            $object->setCanCreateInvoices(null);
        }
        if (property_exists($data, 'is_active') && $data->{'is_active'} !== null) {
            $object->setIsActive($data->{'is_active'});
        }
        elseif (property_exists($data, 'is_active') && $data->{'is_active'} === null) {
            $object->setIsActive(null);
        }
        if (property_exists($data, 'weekly_capacity') && $data->{'weekly_capacity'} !== null) {
            $object->setWeeklyCapacity($data->{'weekly_capacity'});
        }
        elseif (property_exists($data, 'weekly_capacity') && $data->{'weekly_capacity'} === null) {
            $object->setWeeklyCapacity(null);
        }
        if (property_exists($data, 'default_hourly_rate') && $data->{'default_hourly_rate'} !== null) {
            $object->setDefaultHourlyRate($data->{'default_hourly_rate'});
        }
        elseif (property_exists($data, 'default_hourly_rate') && $data->{'default_hourly_rate'} === null) {
            $object->setDefaultHourlyRate(null);
        }
        if (property_exists($data, 'cost_rate') && $data->{'cost_rate'} !== null) {
            $object->setCostRate($data->{'cost_rate'});
        }
        elseif (property_exists($data, 'cost_rate') && $data->{'cost_rate'} === null) {
            $object->setCostRate(null);
        }
        if (property_exists($data, 'roles') && $data->{'roles'} !== null) {
            $values = array();
            foreach ($data->{'roles'} as $value) {
                $values[] = $value;
            }
            $object->setRoles($values);
        }
        elseif (property_exists($data, 'roles') && $data->{'roles'} === null) {
            $object->setRoles(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getFirstName()) {
            $data->{'first_name'} = $object->getFirstName();
        }
        else {
            $data->{'first_name'} = null;
        }
        if (null !== $object->getLastName()) {
            $data->{'last_name'} = $object->getLastName();
        }
        else {
            $data->{'last_name'} = null;
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        else {
            $data->{'email'} = null;
        }
        if (null !== $object->getTimezone()) {
            $data->{'timezone'} = $object->getTimezone();
        }
        else {
            $data->{'timezone'} = null;
        }
        if (null !== $object->getHasAccessToAllFutureProjects()) {
            $data->{'has_access_to_all_future_projects'} = $object->getHasAccessToAllFutureProjects();
        }
        else {
            $data->{'has_access_to_all_future_projects'} = null;
        }
        if (null !== $object->getIsContractor()) {
            $data->{'is_contractor'} = $object->getIsContractor();
        }
        else {
            $data->{'is_contractor'} = null;
        }
        if (null !== $object->getIsAdmin()) {
            $data->{'is_admin'} = $object->getIsAdmin();
        }
        else {
            $data->{'is_admin'} = null;
        }
        if (null !== $object->getIsProjectManager()) {
            $data->{'is_project_manager'} = $object->getIsProjectManager();
        }
        else {
            $data->{'is_project_manager'} = null;
        }
        if (null !== $object->getCanSeeRates()) {
            $data->{'can_see_rates'} = $object->getCanSeeRates();
        }
        else {
            $data->{'can_see_rates'} = null;
        }
        if (null !== $object->getCanCreateProjects()) {
            $data->{'can_create_projects'} = $object->getCanCreateProjects();
        }
        else {
            $data->{'can_create_projects'} = null;
        }
        if (null !== $object->getCanCreateInvoices()) {
            $data->{'can_create_invoices'} = $object->getCanCreateInvoices();
        }
        else {
            $data->{'can_create_invoices'} = null;
        }
        if (null !== $object->getIsActive()) {
            $data->{'is_active'} = $object->getIsActive();
        }
        else {
            $data->{'is_active'} = null;
        }
        if (null !== $object->getWeeklyCapacity()) {
            $data->{'weekly_capacity'} = $object->getWeeklyCapacity();
        }
        else {
            $data->{'weekly_capacity'} = null;
        }
        if (null !== $object->getDefaultHourlyRate()) {
            $data->{'default_hourly_rate'} = $object->getDefaultHourlyRate();
        }
        else {
            $data->{'default_hourly_rate'} = null;
        }
        if (null !== $object->getCostRate()) {
            $data->{'cost_rate'} = $object->getCostRate();
        }
        else {
            $data->{'cost_rate'} = null;
        }
        if (null !== $object->getRoles()) {
            $values = array();
            foreach ($object->getRoles() as $value) {
                $values[] = $value;
            }
            $data->{'roles'} = $values;
        }
        else {
            $data->{'roles'} = null;
        }
        return $data;
    }
}