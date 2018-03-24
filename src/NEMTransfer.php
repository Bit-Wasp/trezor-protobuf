<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : types.proto
 */


namespace BitWasp\TrezorProto;

/**
 * Protobuf message : BitWasp.TrezorProto.NEMTransfer
 */
class NEMTransfer extends \Protobuf\AbstractMessage
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
     * recipient optional string = 1
     *
     * @var string
     */
    protected $recipient = null;

    /**
     * amount optional uint64 = 2
     *
     * @var int
     */
    protected $amount = null;

    /**
     * payload optional bytes = 3
     *
     * @var \Protobuf\Stream
     */
    protected $payload = null;

    /**
     * public_key optional bytes = 4
     *
     * @var \Protobuf\Stream
     */
    protected $public_key = null;

    /**
     * mosaics repeated message = 5
     *
     * @var \Protobuf\Collection<\BitWasp\TrezorProto\NEMMosaic>
     */
    protected $mosaics = null;

    /**
     * Check if 'recipient' has a value
     *
     * @return bool
     */
    public function hasRecipient()
    {
        return $this->recipient !== null;
    }

    /**
     * Get 'recipient' value
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Set 'recipient' value
     *
     * @param string $value
     */
    public function setRecipient($value = null)
    {
        $this->recipient = $value;
    }

    /**
     * Check if 'amount' has a value
     *
     * @return bool
     */
    public function hasAmount()
    {
        return $this->amount !== null;
    }

    /**
     * Get 'amount' value
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set 'amount' value
     *
     * @param int $value
     */
    public function setAmount($value = null)
    {
        $this->amount = $value;
    }

    /**
     * Check if 'payload' has a value
     *
     * @return bool
     */
    public function hasPayload()
    {
        return $this->payload !== null;
    }

    /**
     * Get 'payload' value
     *
     * @return \Protobuf\Stream
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Set 'payload' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setPayload($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->payload = $value;
    }

    /**
     * Check if 'public_key' has a value
     *
     * @return bool
     */
    public function hasPublicKey()
    {
        return $this->public_key !== null;
    }

    /**
     * Get 'public_key' value
     *
     * @return \Protobuf\Stream
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

    /**
     * Set 'public_key' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setPublicKey($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->public_key = $value;
    }

    /**
     * Check if 'mosaics' has a value
     *
     * @return bool
     */
    public function hasMosaicsList()
    {
        return $this->mosaics !== null;
    }

    /**
     * Get 'mosaics' value
     *
     * @return \Protobuf\Collection<\BitWasp\TrezorProto\NEMMosaic>
     */
    public function getMosaicsList()
    {
        return $this->mosaics;
    }

    /**
     * Set 'mosaics' value
     *
     * @param \Protobuf\Collection<\BitWasp\TrezorProto\NEMMosaic> $value
     */
    public function setMosaicsList(\Protobuf\Collection $value = null)
    {
        $this->mosaics = $value;
    }

    /**
     * Add a new element to 'mosaics'
     *
     * @param \BitWasp\TrezorProto\NEMMosaic $value
     */
    public function addMosaics(\BitWasp\TrezorProto\NEMMosaic $value)
    {
        if ($this->mosaics === null) {
            $this->mosaics = new \Protobuf\MessageCollection();
        }

        $this->mosaics->add($value);
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
            'recipient' => null,
            'amount' => null,
            'payload' => null,
            'public_key' => null,
            'mosaics' => []
        ], $values);

        $message->setRecipient($values['recipient']);
        $message->setAmount($values['amount']);
        $message->setPayload($values['payload']);
        $message->setPublicKey($values['public_key']);

        foreach ($values['mosaics'] as $item) {
            $message->addMosaics($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'NEMTransfer',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'recipient',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'amount',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'payload',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'public_key',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'mosaics',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.BitWasp.TrezorProto.NEMMosaic'
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

        if ($this->recipient !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->recipient);
        }

        if ($this->amount !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->amount);
        }

        if ($this->payload !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeByteStream($stream, $this->payload);
        }

        if ($this->public_key !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeByteStream($stream, $this->public_key);
        }

        if ($this->mosaics !== null) {
            foreach ($this->mosaics as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
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

                $this->recipient = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->amount = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->payload = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->public_key = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \BitWasp\TrezorProto\NEMMosaic();

                if ($this->mosaics === null) {
                    $this->mosaics = new \Protobuf\MessageCollection();
                }

                $this->mosaics->add($innerMessage);

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

        if ($this->recipient !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->recipient);
        }

        if ($this->amount !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->amount);
        }

        if ($this->payload !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->payload);
        }

        if ($this->public_key !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->public_key);
        }

        if ($this->mosaics !== null) {
            foreach ($this->mosaics as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
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
        $this->recipient = null;
        $this->amount = null;
        $this->payload = null;
        $this->public_key = null;
        $this->mosaics = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \BitWasp\TrezorProto\NEMTransfer) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->recipient = ($message->recipient !== null) ? $message->recipient : $this->recipient;
        $this->amount = ($message->amount !== null) ? $message->amount : $this->amount;
        $this->payload = ($message->payload !== null) ? $message->payload : $this->payload;
        $this->public_key = ($message->public_key !== null) ? $message->public_key : $this->public_key;
        $this->mosaics = ($message->mosaics !== null) ? $message->mosaics : $this->mosaics;
    }


}

