<?php

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use JoliCode\Harvest\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\User';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\User';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\User();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('first_name', $data) && $data['first_name'] !== null) {
            $object->setFirstName($data['first_name']);
        }
        elseif (\array_key_exists('first_name', $data) && $data['first_name'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('last_name', $data) && $data['last_name'] !== null) {
            $object->setLastName($data['last_name']);
        }
        elseif (\array_key_exists('last_name', $data) && $data['last_name'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('timezone', $data) && $data['timezone'] !== null) {
            $object->setTimezone($data['timezone']);
        }
        elseif (\array_key_exists('timezone', $data) && $data['timezone'] === null) {
            $object->setTimezone(null);
        }
        if (\array_key_exists('has_access_to_all_future_projects', $data) && $data['has_access_to_all_future_projects'] !== null) {
            $object->setHasAccessToAllFutureProjects($data['has_access_to_all_future_projects']);
        }
        elseif (\array_key_exists('has_access_to_all_future_projects', $data) && $data['has_access_to_all_future_projects'] === null) {
            $object->setHasAccessToAllFutureProjects(null);
        }
        if (\array_key_exists('is_contractor', $data) && $data['is_contractor'] !== null) {
            $object->setIsContractor($data['is_contractor']);
        }
        elseif (\array_key_exists('is_contractor', $data) && $data['is_contractor'] === null) {
            $object->setIsContractor(null);
        }
        if (\array_key_exists('is_admin', $data) && $data['is_admin'] !== null) {
            $object->setIsAdmin($data['is_admin']);
        }
        elseif (\array_key_exists('is_admin', $data) && $data['is_admin'] === null) {
            $object->setIsAdmin(null);
        }
        if (\array_key_exists('is_project_manager', $data) && $data['is_project_manager'] !== null) {
            $object->setIsProjectManager($data['is_project_manager']);
        }
        elseif (\array_key_exists('is_project_manager', $data) && $data['is_project_manager'] === null) {
            $object->setIsProjectManager(null);
        }
        if (\array_key_exists('can_see_rates', $data) && $data['can_see_rates'] !== null) {
            $object->setCanSeeRates($data['can_see_rates']);
        }
        elseif (\array_key_exists('can_see_rates', $data) && $data['can_see_rates'] === null) {
            $object->setCanSeeRates(null);
        }
        if (\array_key_exists('can_create_projects', $data) && $data['can_create_projects'] !== null) {
            $object->setCanCreateProjects($data['can_create_projects']);
        }
        elseif (\array_key_exists('can_create_projects', $data) && $data['can_create_projects'] === null) {
            $object->setCanCreateProjects(null);
        }
        if (\array_key_exists('can_create_invoices', $data) && $data['can_create_invoices'] !== null) {
            $object->setCanCreateInvoices($data['can_create_invoices']);
        }
        elseif (\array_key_exists('can_create_invoices', $data) && $data['can_create_invoices'] === null) {
            $object->setCanCreateInvoices(null);
        }
        if (\array_key_exists('is_active', $data) && $data['is_active'] !== null) {
            $object->setIsActive($data['is_active']);
        }
        elseif (\array_key_exists('is_active', $data) && $data['is_active'] === null) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('weekly_capacity', $data) && $data['weekly_capacity'] !== null) {
            $object->setWeeklyCapacity($data['weekly_capacity']);
        }
        elseif (\array_key_exists('weekly_capacity', $data) && $data['weekly_capacity'] === null) {
            $object->setWeeklyCapacity(null);
        }
        if (\array_key_exists('default_hourly_rate', $data) && $data['default_hourly_rate'] !== null) {
            $object->setDefaultHourlyRate($data['default_hourly_rate']);
        }
        elseif (\array_key_exists('default_hourly_rate', $data) && $data['default_hourly_rate'] === null) {
            $object->setDefaultHourlyRate(null);
        }
        if (\array_key_exists('cost_rate', $data) && $data['cost_rate'] !== null) {
            $object->setCostRate($data['cost_rate']);
        }
        elseif (\array_key_exists('cost_rate', $data) && $data['cost_rate'] === null) {
            $object->setCostRate(null);
        }
        if (\array_key_exists('roles', $data) && $data['roles'] !== null) {
            $values = array();
            foreach ($data['roles'] as $value) {
                $values[] = $value;
            }
            $object->setRoles($values);
        }
        elseif (\array_key_exists('roles', $data) && $data['roles'] === null) {
            $object->setRoles(null);
        }
        if (\array_key_exists('avatar_url', $data) && $data['avatar_url'] !== null) {
            $object->setAvatarUrl($data['avatar_url']);
        }
        elseif (\array_key_exists('avatar_url', $data) && $data['avatar_url'] === null) {
            $object->setAvatarUrl(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['created_at']));
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['updated_at']));
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('telephone', $data) && $data['telephone'] !== null) {
            $object->setTelephone($data['telephone']);
        }
        elseif (\array_key_exists('telephone', $data) && $data['telephone'] === null) {
            $object->setTelephone(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getFirstName()) {
            $data['first_name'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['last_name'] = $object->getLastName();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getTimezone()) {
            $data['timezone'] = $object->getTimezone();
        }
        if (null !== $object->getHasAccessToAllFutureProjects()) {
            $data['has_access_to_all_future_projects'] = $object->getHasAccessToAllFutureProjects();
        }
        if (null !== $object->getIsContractor()) {
            $data['is_contractor'] = $object->getIsContractor();
        }
        if (null !== $object->getIsAdmin()) {
            $data['is_admin'] = $object->getIsAdmin();
        }
        if (null !== $object->getIsProjectManager()) {
            $data['is_project_manager'] = $object->getIsProjectManager();
        }
        if (null !== $object->getCanSeeRates()) {
            $data['can_see_rates'] = $object->getCanSeeRates();
        }
        if (null !== $object->getCanCreateProjects()) {
            $data['can_create_projects'] = $object->getCanCreateProjects();
        }
        if (null !== $object->getCanCreateInvoices()) {
            $data['can_create_invoices'] = $object->getCanCreateInvoices();
        }
        if (null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if (null !== $object->getWeeklyCapacity()) {
            $data['weekly_capacity'] = $object->getWeeklyCapacity();
        }
        if (null !== $object->getDefaultHourlyRate()) {
            $data['default_hourly_rate'] = $object->getDefaultHourlyRate();
        }
        if (null !== $object->getCostRate()) {
            $data['cost_rate'] = $object->getCostRate();
        }
        if (null !== $object->getRoles()) {
            $values = array();
            foreach ($object->getRoles() as $value) {
                $values[] = $value;
            }
            $data['roles'] = $values;
        }
        if (null !== $object->getAvatarUrl()) {
            $data['avatar_url'] = $object->getAvatarUrl();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if (null !== $object->getTelephone()) {
            $data['telephone'] = $object->getTelephone();
        }
        return $data;
    }
}