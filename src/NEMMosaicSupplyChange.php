<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : types.proto
 */


namespace BitWasp\TrezorProto;

/**
 * Protobuf message : BitWasp.TrezorProto.NEMMosaicSupplyChange
 */
class NEMMosaicSupplyChange extends \Protobuf\AbstractMessage
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
     * namespace optional string = 1
     *
     * @var string
     */
    protected $namespace = null;

    /**
     * mosaic optional string = 2
     *
     * @var string
     */
    protected $mosaic = null;

    /**
     * type optional enum = 3
     *
     * @var \BitWasp\TrezorProto\NEMSupplyChangeType
     */
    protected $type = null;

    /**
     * delta optional uint64 = 4
     *
     * @var int
     */
    protected $delta = null;

    /**
     * Check if 'namespace' has a value
     *
     * @return bool
     */
    public function hasNamespace()
    {
        return $this->namespace !== null;
    }

    /**
     * Get 'namespace' value
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Set 'namespace' value
     *
     * @param string $value
     */
    public function setNamespace($value = null)
    {
        $this->namespace = $value;
    }

    /**
     * Check if 'mosaic' has a value
     *
     * @return bool
     */
    public function hasMosaic()
    {
        return $this->mosaic !== null;
    }

    /**
     * Get 'mosaic' value
     *
     * @return string
     */
    public function getMosaic()
    {
        return $this->mosaic;
    }

    /**
     * Set 'mosaic' value
     *
     * @param string $value
     */
    public function setMosaic($value = null)
    {
        $this->mosaic = $value;
    }

    /**
     * Check if 'type' has a value
     *
     * @return bool
     */
    public function hasType()
    {
        return $this->type !== null;
    }

    /**
     * Get 'type' value
     *
     * @return \BitWasp\TrezorProto\NEMSupplyChangeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set 'type' value
     *
     * @param \BitWasp\TrezorProto\NEMSupplyChangeType $value
     */
    public function setType(\BitWasp\TrezorProto\NEMSupplyChangeType $value = null)
    {
        $this->type = $value;
    }

    /**
     * Check if 'delta' has a value
     *
     * @return bool
     */
    public function hasDelta()
    {
        return $this->delta !== null;
    }

    /**
     * Get 'delta' value
     *
     * @return int
     */
    public function getDelta()
    {
        return $this->delta;
    }

    /**
     * Set 'delta' value
     *
     * @param int $value
     */
    public function setDelta($value = null)
    {
        $this->delta = $value;
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
            'namespace' => null,
            'mosaic' => null,
            'type' => null,
            'delta' => null
        ], $values);

        $message->setNamespace($values['namespace']);
        $message->setMosaic($values['mosaic']);
        $message->setType($values['type']);
        $message->setDelta($values['delta']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'NEMMosaicSupplyChange',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'namespace',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'mosaic',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.BitWasp.TrezorProto.NEMSupplyChangeType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'delta',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
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

        if ($this->namespace !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->namespace);
        }

        if ($this->mosaic !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->mosaic);
        }

        if ($this->type !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->type->value());
        }

        if ($this->delta !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->delta);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->namespace = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->mosaic = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->type = \BitWasp\TrezorProto\NEMSupplyChangeType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->delta = $reader->readVarint($stream);

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

        if ($this->namespace !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->namespace);
        }

        if ($this->mosaic !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->mosaic);
        }

        if ($this->type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->type->value());
        }

        if ($this->delta !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->delta);
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
        $this->namespace = null;
        $this->mosaic = null;
        $this->type = null;
        $this->delta = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \BitWasp\TrezorProto\NEMMosaicSupplyChange) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->namespace = ($message->namespace !== null) ? $message->namespace : $this->namespace;
        $this->mosaic = ($message->mosaic !== null) ? $message->mosaic : $this->mosaic;
        $this->type = ($message->type !== null) ? $message->type : $this->type;
        $this->delta = ($message->delta !== null) ? $message->delta : $this->delta;
    }


}

