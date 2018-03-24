<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : messages.proto
 */


namespace BitWasp\TrezorProto;

/**
 * Protobuf message : BitWasp.TrezorProto.CipherKeyValue
 */
class CipherKeyValue extends \Protobuf\AbstractMessage
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
     * address_n repeated uint32 = 1
     *
     * @var \Protobuf\Collection
     */
    protected $address_n = null;

    /**
     * key optional string = 2
     *
     * @var string
     */
    protected $key = null;

    /**
     * value optional bytes = 3
     *
     * @var \Protobuf\Stream
     */
    protected $value = null;

    /**
     * encrypt optional bool = 4
     *
     * @var bool
     */
    protected $encrypt = null;

    /**
     * ask_on_encrypt optional bool = 5
     *
     * @var bool
     */
    protected $ask_on_encrypt = null;

    /**
     * ask_on_decrypt optional bool = 6
     *
     * @var bool
     */
    protected $ask_on_decrypt = null;

    /**
     * iv optional bytes = 7
     *
     * @var \Protobuf\Stream
     */
    protected $iv = null;

    /**
     * Check if 'address_n' has a value
     *
     * @return bool
     */
    public function hasAddressNList()
    {
        return $this->address_n !== null;
    }

    /**
     * Get 'address_n' value
     *
     * @return \Protobuf\Collection
     */
    public function getAddressNList()
    {
        return $this->address_n;
    }

    /**
     * Set 'address_n' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setAddressNList(\Protobuf\Collection $value = null)
    {
        $this->address_n = $value;
    }

    /**
     * Add a new element to 'address_n'
     *
     * @param int $value
     */
    public function addAddressN($value)
    {
        if ($this->address_n === null) {
            $this->address_n = new \Protobuf\ScalarCollection();
        }

        $this->address_n->add($value);
    }

    /**
     * Check if 'key' has a value
     *
     * @return bool
     */
    public function hasKey()
    {
        return $this->key !== null;
    }

    /**
     * Get 'key' value
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set 'key' value
     *
     * @param string $value
     */
    public function setKey($value = null)
    {
        $this->key = $value;
    }

    /**
     * Check if 'value' has a value
     *
     * @return bool
     */
    public function hasValue()
    {
        return $this->value !== null;
    }

    /**
     * Get 'value' value
     *
     * @return \Protobuf\Stream
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set 'value' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setValue($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->value = $value;
    }

    /**
     * Check if 'encrypt' has a value
     *
     * @return bool
     */
    public function hasEncrypt()
    {
        return $this->encrypt !== null;
    }

    /**
     * Get 'encrypt' value
     *
     * @return bool
     */
    public function getEncrypt()
    {
        return $this->encrypt;
    }

    /**
     * Set 'encrypt' value
     *
     * @param bool $value
     */
    public function setEncrypt($value = null)
    {
        $this->encrypt = $value;
    }

    /**
     * Check if 'ask_on_encrypt' has a value
     *
     * @return bool
     */
    public function hasAskOnEncrypt()
    {
        return $this->ask_on_encrypt !== null;
    }

    /**
     * Get 'ask_on_encrypt' value
     *
     * @return bool
     */
    public function getAskOnEncrypt()
    {
        return $this->ask_on_encrypt;
    }

    /**
     * Set 'ask_on_encrypt' value
     *
     * @param bool $value
     */
    public function setAskOnEncrypt($value = null)
    {
        $this->ask_on_encrypt = $value;
    }

    /**
     * Check if 'ask_on_decrypt' has a value
     *
     * @return bool
     */
    public function hasAskOnDecrypt()
    {
        return $this->ask_on_decrypt !== null;
    }

    /**
     * Get 'ask_on_decrypt' value
     *
     * @return bool
     */
    public function getAskOnDecrypt()
    {
        return $this->ask_on_decrypt;
    }

    /**
     * Set 'ask_on_decrypt' value
     *
     * @param bool $value
     */
    public function setAskOnDecrypt($value = null)
    {
        $this->ask_on_decrypt = $value;
    }

    /**
     * Check if 'iv' has a value
     *
     * @return bool
     */
    public function hasIv()
    {
        return $this->iv !== null;
    }

    /**
     * Get 'iv' value
     *
     * @return \Protobuf\Stream
     */
    public function getIv()
    {
        return $this->iv;
    }

    /**
     * Set 'iv' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setIv($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->iv = $value;
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
            'address_n' => [],
            'key' => null,
            'value' => null,
            'encrypt' => null,
            'ask_on_encrypt' => null,
            'ask_on_decrypt' => null,
            'iv' => null
        ], $values);

        $message->setKey($values['key']);
        $message->setValue($values['value']);
        $message->setEncrypt($values['encrypt']);
        $message->setAskOnEncrypt($values['ask_on_encrypt']);
        $message->setAskOnDecrypt($values['ask_on_decrypt']);
        $message->setIv($values['iv']);

        foreach ($values['address_n'] as $item) {
            $message->addAddressN($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CipherKeyValue',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'address_n',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'key',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'value',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'encrypt',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'ask_on_encrypt',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'ask_on_decrypt',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'iv',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
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

        if ($this->address_n !== null) {
            foreach ($this->address_n as $val) {
                $writer->writeVarint($stream, 8);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->key !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->key);
        }

        if ($this->value !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeByteStream($stream, $this->value);
        }

        if ($this->encrypt !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->encrypt);
        }

        if ($this->ask_on_encrypt !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->ask_on_encrypt);
        }

        if ($this->ask_on_decrypt !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->ask_on_decrypt);
        }

        if ($this->iv !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeByteStream($stream, $this->iv);
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
                \Protobuf\WireFormat::assertWireType($wire, 13);

                if ($this->address_n === null) {
                    $this->address_n = new \Protobuf\ScalarCollection();
                }

                $this->address_n->add($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->key = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->value = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->encrypt = $reader->readBool($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->ask_on_encrypt = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->ask_on_decrypt = $reader->readBool($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->iv = $reader->readByteStream($stream);

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

        if ($this->address_n !== null) {
            foreach ($this->address_n as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->key !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->key);
        }

        if ($this->value !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->value);
        }

        if ($this->encrypt !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->ask_on_encrypt !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->ask_on_decrypt !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->iv !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->iv);
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
        $this->address_n = null;
        $this->key = null;
        $this->value = null;
        $this->encrypt = null;
        $this->ask_on_encrypt = null;
        $this->ask_on_decrypt = null;
        $this->iv = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \BitWasp\TrezorProto\CipherKeyValue) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->address_n = ($message->address_n !== null) ? $message->address_n : $this->address_n;
        $this->key = ($message->key !== null) ? $message->key : $this->key;
        $this->value = ($message->value !== null) ? $message->value : $this->value;
        $this->encrypt = ($message->encrypt !== null) ? $message->encrypt : $this->encrypt;
        $this->ask_on_encrypt = ($message->ask_on_encrypt !== null) ? $message->ask_on_encrypt : $this->ask_on_encrypt;
        $this->ask_on_decrypt = ($message->ask_on_decrypt !== null) ? $message->ask_on_decrypt : $this->ask_on_decrypt;
        $this->iv = ($message->iv !== null) ? $message->iv : $this->iv;
    }


}

