<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use JoliCode\Harvest\Api\Runtime\Normalizer\CheckArray;
use JoliCode\Harvest\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class ProjectBudgetReportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Harvest\\Api\\Model\\ProjectBudgetReportResult' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\ProjectBudgetReportResult' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\ProjectBudgetReportResult();
            if (\array_key_exists('budget', $data) && \is_int($data['budget'])) {
                $data['budget'] = (float) $data['budget'];
            }
            if (\array_key_exists('budget_spent', $data) && \is_int($data['budget_spent'])) {
                $data['budget_spent'] = (float) $data['budget_spent'];
            }
            if (\array_key_exists('budget_remaining', $data) && \is_int($data['budget_remaining'])) {
                $data['budget_remaining'] = (float) $data['budget_remaining'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('client_id', $data) && null !== $data['client_id']) {
                $object->setClientId($data['client_id']);
                unset($data['client_id']);
            } elseif (\array_key_exists('client_id', $data) && null === $data['client_id']) {
                $object->setClientId(null);
            }
            if (\array_key_exists('client_name', $data) && null !== $data['client_name']) {
                $object->setClientName($data['client_name']);
                unset($data['client_name']);
            } elseif (\array_key_exists('client_name', $data) && null === $data['client_name']) {
                $object->setClientName(null);
            }
            if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
            } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
                $object->setProjectId(null);
            }
            if (\array_key_exists('project_name', $data) && null !== $data['project_name']) {
                $object->setProjectName($data['project_name']);
                unset($data['project_name']);
            } elseif (\array_key_exists('project_name', $data) && null === $data['project_name']) {
                $object->setProjectName(null);
            }
            if (\array_key_exists('budget_is_monthly', $data) && null !== $data['budget_is_monthly']) {
                $object->setBudgetIsMonthly($data['budget_is_monthly']);
                unset($data['budget_is_monthly']);
            } elseif (\array_key_exists('budget_is_monthly', $data) && null === $data['budget_is_monthly']) {
                $object->setBudgetIsMonthly(null);
            }
            if (\array_key_exists('budget_by', $data) && null !== $data['budget_by']) {
                $object->setBudgetBy($data['budget_by']);
                unset($data['budget_by']);
            } elseif (\array_key_exists('budget_by', $data) && null === $data['budget_by']) {
                $object->setBudgetBy(null);
            }
            if (\array_key_exists('is_active', $data) && null !== $data['is_active']) {
                $object->setIsActive($data['is_active']);
                unset($data['is_active']);
            } elseif (\array_key_exists('is_active', $data) && null === $data['is_active']) {
                $object->setIsActive(null);
            }
            if (\array_key_exists('budget', $data) && null !== $data['budget']) {
                $object->setBudget($data['budget']);
                unset($data['budget']);
            } elseif (\array_key_exists('budget', $data) && null === $data['budget']) {
                $object->setBudget(null);
            }
            if (\array_key_exists('budget_spent', $data) && null !== $data['budget_spent']) {
                $object->setBudgetSpent($data['budget_spent']);
                unset($data['budget_spent']);
            } elseif (\array_key_exists('budget_spent', $data) && null === $data['budget_spent']) {
                $object->setBudgetSpent(null);
            }
            if (\array_key_exists('budget_remaining', $data) && null !== $data['budget_remaining']) {
                $object->setBudgetRemaining($data['budget_remaining']);
                unset($data['budget_remaining']);
            } elseif (\array_key_exists('budget_remaining', $data) && null === $data['budget_remaining']) {
                $object->setBudgetRemaining(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('clientId') && null !== $object->getClientId()) {
                $data['client_id'] = $object->getClientId();
            }
            if ($object->isInitialized('clientName') && null !== $object->getClientName()) {
                $data['client_name'] = $object->getClientName();
            }
            if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
                $data['project_id'] = $object->getProjectId();
            }
            if ($object->isInitialized('projectName') && null !== $object->getProjectName()) {
                $data['project_name'] = $object->getProjectName();
            }
            if ($object->isInitialized('budgetIsMonthly') && null !== $object->getBudgetIsMonthly()) {
                $data['budget_is_monthly'] = $object->getBudgetIsMonthly();
            }
            if ($object->isInitialized('budgetBy') && null !== $object->getBudgetBy()) {
                $data['budget_by'] = $object->getBudgetBy();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('budget') && null !== $object->getBudget()) {
                $data['budget'] = $object->getBudget();
            }
            if ($object->isInitialized('budgetSpent') && null !== $object->getBudgetSpent()) {
                $data['budget_spent'] = $object->getBudgetSpent();
            }
            if ($object->isInitialized('budgetRemaining') && null !== $object->getBudgetRemaining()) {
                $data['budget_remaining'] = $object->getBudgetRemaining();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Harvest\\Api\\Model\\ProjectBudgetReportResult' => false];
        }
    }
} else {
    class ProjectBudgetReportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Harvest\\Api\\Model\\ProjectBudgetReportResult' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\ProjectBudgetReportResult' === $data::class;
        }

        /**
         * @param mixed|null $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\ProjectBudgetReportResult();
            if (\array_key_exists('budget', $data) && \is_int($data['budget'])) {
                $data['budget'] = (float) $data['budget'];
            }
            if (\array_key_exists('budget_spent', $data) && \is_int($data['budget_spent'])) {
                $data['budget_spent'] = (float) $data['budget_spent'];
            }
            if (\array_key_exists('budget_remaining', $data) && \is_int($data['budget_remaining'])) {
                $data['budget_remaining'] = (float) $data['budget_remaining'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('client_id', $data) && null !== $data['client_id']) {
                $object->setClientId($data['client_id']);
                unset($data['client_id']);
            } elseif (\array_key_exists('client_id', $data) && null === $data['client_id']) {
                $object->setClientId(null);
            }
            if (\array_key_exists('client_name', $data) && null !== $data['client_name']) {
                $object->setClientName($data['client_name']);
                unset($data['client_name']);
            } elseif (\array_key_exists('client_name', $data) && null === $data['client_name']) {
                $object->setClientName(null);
            }
            if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
            } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
                $object->setProjectId(null);
            }
            if (\array_key_exists('project_name', $data) && null !== $data['project_name']) {
                $object->setProjectName($data['project_name']);
                unset($data['project_name']);
            } elseif (\array_key_exists('project_name', $data) && null === $data['project_name']) {
                $object->setProjectName(null);
            }
            if (\array_key_exists('budget_is_monthly', $data) && null !== $data['budget_is_monthly']) {
                $object->setBudgetIsMonthly($data['budget_is_monthly']);
                unset($data['budget_is_monthly']);
            } elseif (\array_key_exists('budget_is_monthly', $data) && null === $data['budget_is_monthly']) {
                $object->setBudgetIsMonthly(null);
            }
            if (\array_key_exists('budget_by', $data) && null !== $data['budget_by']) {
                $object->setBudgetBy($data['budget_by']);
                unset($data['budget_by']);
            } elseif (\array_key_exists('budget_by', $data) && null === $data['budget_by']) {
                $object->setBudgetBy(null);
            }
            if (\array_key_exists('is_active', $data) && null !== $data['is_active']) {
                $object->setIsActive($data['is_active']);
                unset($data['is_active']);
            } elseif (\array_key_exists('is_active', $data) && null === $data['is_active']) {
                $object->setIsActive(null);
            }
            if (\array_key_exists('budget', $data) && null !== $data['budget']) {
                $object->setBudget($data['budget']);
                unset($data['budget']);
            } elseif (\array_key_exists('budget', $data) && null === $data['budget']) {
                $object->setBudget(null);
            }
            if (\array_key_exists('budget_spent', $data) && null !== $data['budget_spent']) {
                $object->setBudgetSpent($data['budget_spent']);
                unset($data['budget_spent']);
            } elseif (\array_key_exists('budget_spent', $data) && null === $data['budget_spent']) {
                $object->setBudgetSpent(null);
            }
            if (\array_key_exists('budget_remaining', $data) && null !== $data['budget_remaining']) {
                $object->setBudgetRemaining($data['budget_remaining']);
                unset($data['budget_remaining']);
            } elseif (\array_key_exists('budget_remaining', $data) && null === $data['budget_remaining']) {
                $object->setBudgetRemaining(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @param mixed|null $format
         *
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('clientId') && null !== $object->getClientId()) {
                $data['client_id'] = $object->getClientId();
            }
            if ($object->isInitialized('clientName') && null !== $object->getClientName()) {
                $data['client_name'] = $object->getClientName();
            }
            if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
                $data['project_id'] = $object->getProjectId();
            }
            if ($object->isInitialized('projectName') && null !== $object->getProjectName()) {
                $data['project_name'] = $object->getProjectName();
            }
            if ($object->isInitialized('budgetIsMonthly') && null !== $object->getBudgetIsMonthly()) {
                $data['budget_is_monthly'] = $object->getBudgetIsMonthly();
            }
            if ($object->isInitialized('budgetBy') && null !== $object->getBudgetBy()) {
                $data['budget_by'] = $object->getBudgetBy();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('budget') && null !== $object->getBudget()) {
                $data['budget'] = $object->getBudget();
            }
            if ($object->isInitialized('budgetSpent') && null !== $object->getBudgetSpent()) {
                $data['budget_spent'] = $object->getBudgetSpent();
            }
            if ($object->isInitialized('budgetRemaining') && null !== $object->getBudgetRemaining()) {
                $data['budget_remaining'] = $object->getBudgetRemaining();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Harvest\\Api\\Model\\ProjectBudgetReportResult' => false];
        }
    }
}
