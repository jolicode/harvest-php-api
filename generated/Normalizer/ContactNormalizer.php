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
    class ContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Harvest\Api\Model\Contact::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Harvest\Api\Model\Contact::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\Contact();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('client', $data) && null !== $data['client']) {
                $object->setClient($this->denormalizer->denormalize($data['client'], \JoliCode\Harvest\Api\Model\ContactClient::class, 'json', $context));
                unset($data['client']);
            } elseif (\array_key_exists('client', $data) && null === $data['client']) {
                $object->setClient(null);
            }
            if (\array_key_exists('title', $data) && null !== $data['title']) {
                $object->setTitle($data['title']);
                unset($data['title']);
            } elseif (\array_key_exists('title', $data) && null === $data['title']) {
                $object->setTitle(null);
            }
            if (\array_key_exists('first_name', $data) && null !== $data['first_name']) {
                $object->setFirstName($data['first_name']);
                unset($data['first_name']);
            } elseif (\array_key_exists('first_name', $data) && null === $data['first_name']) {
                $object->setFirstName(null);
            }
            if (\array_key_exists('last_name', $data) && null !== $data['last_name']) {
                $object->setLastName($data['last_name']);
                unset($data['last_name']);
            } elseif (\array_key_exists('last_name', $data) && null === $data['last_name']) {
                $object->setLastName(null);
            }
            if (\array_key_exists('email', $data) && null !== $data['email']) {
                $object->setEmail($data['email']);
                unset($data['email']);
            } elseif (\array_key_exists('email', $data) && null === $data['email']) {
                $object->setEmail(null);
            }
            if (\array_key_exists('phone_office', $data) && null !== $data['phone_office']) {
                $object->setPhoneOffice($data['phone_office']);
                unset($data['phone_office']);
            } elseif (\array_key_exists('phone_office', $data) && null === $data['phone_office']) {
                $object->setPhoneOffice(null);
            }
            if (\array_key_exists('phone_mobile', $data) && null !== $data['phone_mobile']) {
                $object->setPhoneMobile($data['phone_mobile']);
                unset($data['phone_mobile']);
            } elseif (\array_key_exists('phone_mobile', $data) && null === $data['phone_mobile']) {
                $object->setPhoneMobile(null);
            }
            if (\array_key_exists('fax', $data) && null !== $data['fax']) {
                $object->setFax($data['fax']);
                unset($data['fax']);
            } elseif (\array_key_exists('fax', $data) && null === $data['fax']) {
                $object->setFax(null);
            }
            if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['created_at']));
                unset($data['created_at']);
            } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
                $object->setCreatedAt(null);
            }
            if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['updated_at']));
                unset($data['updated_at']);
            } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
                $object->setUpdatedAt(null);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('client') && null !== $object->getClient()) {
                $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['first_name'] = $object->getFirstName();
            }
            if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
                $data['last_name'] = $object->getLastName();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('phoneOffice') && null !== $object->getPhoneOffice()) {
                $data['phone_office'] = $object->getPhoneOffice();
            }
            if ($object->isInitialized('phoneMobile') && null !== $object->getPhoneMobile()) {
                $data['phone_mobile'] = $object->getPhoneMobile();
            }
            if ($object->isInitialized('fax') && null !== $object->getFax()) {
                $data['fax'] = $object->getFax();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\TH:i:s\Z');
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\TH:i:s\Z');
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
            return [\JoliCode\Harvest\Api\Model\Contact::class => false];
        }
    }
} else {
    class ContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Harvest\Api\Model\Contact::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Harvest\Api\Model\Contact::class === $data::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\Contact();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('client', $data) && null !== $data['client']) {
                $object->setClient($this->denormalizer->denormalize($data['client'], \JoliCode\Harvest\Api\Model\ContactClient::class, 'json', $context));
                unset($data['client']);
            } elseif (\array_key_exists('client', $data) && null === $data['client']) {
                $object->setClient(null);
            }
            if (\array_key_exists('title', $data) && null !== $data['title']) {
                $object->setTitle($data['title']);
                unset($data['title']);
            } elseif (\array_key_exists('title', $data) && null === $data['title']) {
                $object->setTitle(null);
            }
            if (\array_key_exists('first_name', $data) && null !== $data['first_name']) {
                $object->setFirstName($data['first_name']);
                unset($data['first_name']);
            } elseif (\array_key_exists('first_name', $data) && null === $data['first_name']) {
                $object->setFirstName(null);
            }
            if (\array_key_exists('last_name', $data) && null !== $data['last_name']) {
                $object->setLastName($data['last_name']);
                unset($data['last_name']);
            } elseif (\array_key_exists('last_name', $data) && null === $data['last_name']) {
                $object->setLastName(null);
            }
            if (\array_key_exists('email', $data) && null !== $data['email']) {
                $object->setEmail($data['email']);
                unset($data['email']);
            } elseif (\array_key_exists('email', $data) && null === $data['email']) {
                $object->setEmail(null);
            }
            if (\array_key_exists('phone_office', $data) && null !== $data['phone_office']) {
                $object->setPhoneOffice($data['phone_office']);
                unset($data['phone_office']);
            } elseif (\array_key_exists('phone_office', $data) && null === $data['phone_office']) {
                $object->setPhoneOffice(null);
            }
            if (\array_key_exists('phone_mobile', $data) && null !== $data['phone_mobile']) {
                $object->setPhoneMobile($data['phone_mobile']);
                unset($data['phone_mobile']);
            } elseif (\array_key_exists('phone_mobile', $data) && null === $data['phone_mobile']) {
                $object->setPhoneMobile(null);
            }
            if (\array_key_exists('fax', $data) && null !== $data['fax']) {
                $object->setFax($data['fax']);
                unset($data['fax']);
            } elseif (\array_key_exists('fax', $data) && null === $data['fax']) {
                $object->setFax(null);
            }
            if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['created_at']));
                unset($data['created_at']);
            } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
                $object->setCreatedAt(null);
            }
            if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['updated_at']));
                unset($data['updated_at']);
            } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
                $object->setUpdatedAt(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('client') && null !== $object->getClient()) {
                $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['first_name'] = $object->getFirstName();
            }
            if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
                $data['last_name'] = $object->getLastName();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('phoneOffice') && null !== $object->getPhoneOffice()) {
                $data['phone_office'] = $object->getPhoneOffice();
            }
            if ($object->isInitialized('phoneMobile') && null !== $object->getPhoneMobile()) {
                $data['phone_mobile'] = $object->getPhoneMobile();
            }
            if ($object->isInitialized('fax') && null !== $object->getFax()) {
                $data['fax'] = $object->getFax();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\TH:i:s\Z');
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\TH:i:s\Z');
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
            return [\JoliCode\Harvest\Api\Model\Contact::class => false];
        }
    }
}
