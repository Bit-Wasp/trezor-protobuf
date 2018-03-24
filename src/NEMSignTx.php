<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : messages.proto
 */


namespace BitWasp\TrezorProto;

/**
 * Protobuf message : BitWasp.TrezorProto.NEMSignTx
 */
class NEMSignTx extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * transaction optional message = 1
     *
     * @var \BitWasp\TrezorProto\NEMTransactionCommon
     */
    protected $transaction = null;

    /**
     * multisig optional message = 2
     *
     * @var \BitWasp\TrezorProto\NEMTransactionCommon
     */
    protected $multisig = null;

    /**
     * transfer optional message = 3
     *
     * @var \BitWasp\TrezorProto\NEMTransfer
     */
    protected $transfer = null;

    /**
     * cosigning optional bool = 4
     *
     * @var bool
     */
    protected $cosigning = null;

    /**
     * provision_namespace optional message = 5
     *
     * @var \BitWasp\TrezorProto\NEMProvisionNamespace
     */
    protected $provision_namespace = null;

    /**
     * mosaic_creation optional message = 6
     *
     * @var \BitWasp\TrezorProto\NEMMosaicCreation
     */
    protected $mosaic_creation = null;

    /**
     * supply_change optional message = 7
     *
     * @var \BitWasp\TrezorProto\NEMMosaicSupplyChange
     */
    protected $supply_change = null;

    /**
     * aggregate_modification optional message = 8
     *
     * @var \BitWasp\TrezorProto\NEMAggregateModification
     */
    protected $aggregate_modification = null;

    /**
     * importance_transfer optional message = 9
     *
     * @var \BitWasp\TrezorProto\NEMImportanceTransfer
     */
    protected $importance_transfer = null;

    /**
     * Check if 'transaction' has a value
     *
     * @return bool
     */
    public function hasTransaction()
    {
        return $this->transaction !== null;
    }

    /**
     * Get 'transaction' value
     *
     * @return \BitWasp\TrezorProto\NEMTransactionCommon
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set 'transaction' value
     *
     * @param \BitWasp\TrezorProto\NEMTransactionCommon $value
     */
    public function setTransaction(\BitWasp\TrezorProto\NEMTransactionCommon $value = null)
    {
        $this->transaction = $value;
    }

    /**
     * Check if 'multisig' has a value
     *
     * @return bool
     */
    public function hasMultisig()
    {
        return $this->multisig !== null;
    }

    /**
     * Get 'multisig' value
     *
     * @return \BitWasp\TrezorProto\NEMTransactionCommon
     */
    public function getMultisig()
    {
        return $this->multisig;
    }

    /**
     * Set 'multisig' value
     *
     * @param \BitWasp\TrezorProto\NEMTransactionCommon $value
     */
    public function setMultisig(\BitWasp\TrezorProto\NEMTransactionCommon $value = null)
    {
        $this->multisig = $value;
    }

    /**
     * Check if 'transfer' has a value
     *
     * @return bool
     */
    public function hasTransfer()
    {
        return $this->transfer !== null;
    }

    /**
     * Get 'transfer' value
     *
     * @return \BitWasp\TrezorProto\NEMTransfer
     */
    public function getTransfer()
    {
        return $this->transfer;
    }

    /**
     * Set 'transfer' value
     *
     * @param \BitWasp\TrezorProto\NEMTransfer $value
     */
    public function setTransfer(\BitWasp\TrezorProto\NEMTransfer $value = null)
    {
        $this->transfer = $value;
    }

    /**
     * Check if 'cosigning' has a value
     *
     * @return bool
     */
    public function hasCosigning()
    {
        return $this->cosigning !== null;
    }

    /**
     * Get 'cosigning' value
     *
     * @return bool
     */
    public function getCosigning()
    {
        return $this->cosigning;
    }

    /**
     * Set 'cosigning' value
     *
     * @param bool $value
     */
    public function setCosigning($value = null)
    {
        $this->cosigning = $value;
    }

    /**
     * Check if 'provision_namespace' has a value
     *
     * @return bool
     */
    public function hasProvisionNamespace()
    {
        return $this->provision_namespace !== null;
    }

    /**
     * Get 'provision_namespace' value
     *
     * @return \BitWasp\TrezorProto\NEMProvisionNamespace
     */
    public function getProvisionNamespace()
    {
        return $this->provision_namespace;
    }

    /**
     * Set 'provision_namespace' value
     *
     * @param \BitWasp\TrezorProto\NEMProvisionNamespace $value
     */
    public function setProvisionNamespace(\BitWasp\TrezorProto\NEMProvisionNamespace $value = null)
    {
        $this->provision_namespace = $value;
    }

    /**
     * Check if 'mosaic_creation' has a value
     *
     * @return bool
     */
    public function hasMosaicCreation()
    {
        return $this->mosaic_creation !== null;
    }

    /**
     * Get 'mosaic_creation' value
     *
     * @return \BitWasp\TrezorProto\NEMMosaicCreation
     */
    public function getMosaicCreation()
    {
        return $this->mosaic_creation;
    }

    /**
     * Set 'mosaic_creation' value
     *
     * @param \BitWasp\TrezorProto\NEMMosaicCreation $value
     */
    public function setMosaicCreation(\BitWasp\TrezorProto\NEMMosaicCreation $value = null)
    {
        $this->mosaic_creation = $value;
    }

    /**
     * Check if 'supply_change' has a value
     *
     * @return bool
     */
    public function hasSupplyChange()
    {
        return $this->supply_change !== null;
    }

    /**
     * Get 'supply_change' value
     *
     * @return \BitWasp\TrezorProto\NEMMosaicSupplyChange
     */
    public function getSupplyChange()
    {
        return $this->supply_change;
    }

    /**
     * Set 'supply_change' value
     *
     * @param \BitWasp\TrezorProto\NEMMosaicSupplyChange $value
     */
    public function setSupplyChange(\BitWasp\TrezorProto\NEMMosaicSupplyChange $value = null)
    {
        $this->supply_change = $value;
    }

    /**
     * Check if 'aggregate_modification' has a value
     *
     * @return bool
     */
    public function hasAggregateModification()
    {
        return $this->aggregate_modification !== null;
    }

    /**
     * Get 'aggregate_modification' value
     *
     * @return \BitWasp\TrezorProto\NEMAggregateModification
     */
    public function getAggregateModification()
    {
        return $this->aggregate_modification;
    }

    /**
     * Set 'aggregate_modification' value
     *
     * @param \BitWasp\TrezorProto\NEMAggregateModification $value
     */
    public function setAggregateModification(\BitWasp\TrezorProto\NEMAggregateModification $value = null)
    {
        $this->aggregate_modification = $value;
    }

    /**
     * Check if 'importance_transfer' has a value
     *
     * @return bool
     */
    public function hasImportanceTransfer()
    {
        return $this->importance_transfer !== null;
    }

    /**
     * Get 'importance_transfer' value
     *
     * @return \BitWasp\TrezorProto\NEMImportanceTransfer
     */
    public function getImportanceTransfer()
    {
        return $this->importance_transfer;
    }

    /**
     * Set 'importance_transfer' value
     *
     * @param \BitWasp\TrezorProto\NEMImportanceTransfer $value
     */
    public function setImportanceTransfer(\BitWasp\TrezorProto\NEMImportanceTransfer $value = null)
    {
        $this->importance_transfer = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'transaction' => null,
            'multisig' => null,
            'transfer' => null,
            'cosigning' => null,
            'provision_namespace' => null,
            'mosaic_creation' => null,
            'supply_change' => null,
            'aggregate_modification' => null,
            'importance_transfer' => null
        ], $values);

        $message->setTransaction($values['transaction']);
        $message->setMultisig($values['multisig']);
        $message->setTransfer($values['transfer']);
        $message->setCosigning($values['cosigning']);
        $message->setProvisionNamespace($values['provision_namespace']);
        $message->setMosaicCreation($values['mosaic_creation']);
        $message->setSupplyChange($values['supply_change']);
        $message->setAggregateModification($values['aggregate_modification']);
        $message->setImportanceTransfer($values['importance_transfer']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'NEMSignTx',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'transaction',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.BitWasp.TrezorProto.NEMTransactionCommon'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'multisig',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.BitWasp.TrezorProto.NEMTransactionCommon'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'transfer',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.BitWasp.TrezorProto.NEMTransfer'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'cosigning',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'provision_namespace',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.BitWasp.TrezorProto.NEMProvisionNamespace'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'mosaic_creation',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.BitWasp.TrezorProto.NEMMosaicCreation'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'supply_change',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.BitWasp.TrezorProto.NEMMosaicSupplyChange'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'aggregate_modification',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.BitWasp.TrezorProto.NEMAggregateModification'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'importance_transfer',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.BitWasp.TrezorProto.NEMImportanceTransfer'
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->transaction !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->transaction->serializedSize($sizeContext));
            $this->transaction->writeTo($context);
        }

        if ($this->multisig !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->multisig->serializedSize($sizeContext));
            $this->multisig->writeTo($context);
        }

        if ($this->transfer !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->transfer->serializedSize($sizeContext));
            $this->transfer->writeTo($context);
        }

        if ($this->cosigning !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->cosigning);
        }

        if ($this->provision_namespace !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeVarint($stream, $this->provision_namespace->serializedSize($sizeContext));
            $this->provision_namespace->writeTo($context);
        }

        if ($this->mosaic_creation !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeVarint($stream, $this->mosaic_creation->serializedSize($sizeContext));
            $this->mosaic_creation->writeTo($context);
        }

        if ($this->supply_change !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeVarint($stream, $this->supply_change->serializedSize($sizeContext));
            $this->supply_change->writeTo($context);
        }

        if ($this->aggregate_modification !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeVarint($stream, $this->aggregate_modification->serializedSize($sizeContext));
            $this->aggregate_modification->writeTo($context);
        }

        if ($this->importance_transfer !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeVarint($stream, $this->importance_transfer->serializedSize($sizeContext));
            $this->importance_transfer->writeTo($context);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \BitWasp\TrezorProto\NEMTransactionCommon();

                $this->transaction = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \BitWasp\TrezorProto\NEMTransactionCommon();

                $this->multisig = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \BitWasp\TrezorProto\NEMTransfer();

                $this->transfer = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->cosigning = $reader->readBool($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \BitWasp\TrezorProto\NEMProvisionNamespace();

                $this->provision_namespace = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \BitWasp\TrezorProto\NEMMosaicCreation();

                $this->mosaic_creation = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \BitWasp\TrezorProto\NEMMosaicSupplyChange();

                $this->supply_change = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \BitWasp\TrezorProto\NEMAggregateModification();

                $this->aggregate_modification = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \BitWasp\TrezorProto\NEMImportanceTransfer();

                $this->importance_transfer = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->transaction !== null) {
            $innerSize = $this->transaction->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->multisig !== null) {
            $innerSize = $this->multisig->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->transfer !== null) {
            $innerSize = $this->transfer->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->cosigning !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->provision_namespace !== null) {
            $innerSize = $this->provision_namespace->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->mosaic_creation !== null) {
            $innerSize = $this->mosaic_creation->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->supply_change !== null) {
            $innerSize = $this->supply_change->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->aggregate_modification !== null) {
            $innerSize = $this->aggregate_modification->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->importance_transfer !== null) {
            $innerSize = $this->importance_transfer->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->transaction = null;
        $this->multisig = null;
        $this->transfer = null;
        $this->cosigning = null;
        $this->provision_namespace = null;
        $this->mosaic_creation = null;
        $this->supply_change = null;
        $this->aggregate_modification = null;
        $this->importance_transfer = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \BitWasp\TrezorProto\NEMSignTx) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->transaction = ($message->transaction !== null) ? $message->transaction : $this->transaction;
        $this->multisig = ($message->multisig !== null) ? $message->multisig : $this->multisig;
        $this->transfer = ($message->transfer !== null) ? $message->transfer : $this->transfer;
        $this->cosigning = ($message->cosigning !== null) ? $message->cosigning : $this->cosigning;
        $this->provision_namespace = ($message->provision_namespace !== null) ? $message->provision_namespace : $this->provision_namespace;
        $this->mosaic_creation = ($message->mosaic_creation !== null) ? $message->mosaic_creation : $this->mosaic_creation;
        $this->supply_change = ($message->supply_change !== null) ? $message->supply_change : $this->supply_change;
        $this->aggregate_modification = ($message->aggregate_modification !== null) ? $message->aggregate_modification : $this->aggregate_modification;
        $this->importance_transfer = ($message->importance_transfer !== null) ? $message->importance_transfer : $this->importance_transfer;
    }


}

