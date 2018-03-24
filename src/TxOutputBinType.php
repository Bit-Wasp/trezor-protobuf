<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : types.proto
 */


namespace BitWasp\TrezorProto;

/**
 * Protobuf message : BitWasp.TrezorProto.TxOutputBinType
 */
class TxOutputBinType extends \Protobuf\AbstractMessage
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
     * amount required uint64 = 1
     *
     * @var int
     */
    protected $amount = null;

    /**
     * script_pubkey required bytes = 2
     *
     * @var \Protobuf\Stream
     */
    protected $script_pubkey = null;

    /**
     * decred_script_version optional uint32 = 3
     *
     * @var int
     */
    protected $decred_script_version = null;

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
    public function setAmount($value)
    {
        $this->amount = $value;
    }

    /**
     * Check if 'script_pubkey' has a value
     *
     * @return bool
     */
    public function hasScriptPubkey()
    {
        return $this->script_pubkey !== null;
    }

    /**
     * Get 'script_pubkey' value
     *
     * @return \Protobuf\Stream
     */
    public function getScriptPubkey()
    {
        return $this->script_pubkey;
    }

    /**
     * Set 'script_pubkey' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setScriptPubkey($value)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->script_pubkey = $value;
    }

    /**
     * Check if 'decred_script_version' has a value
     *
     * @return bool
     */
    public function hasDecredScriptVersion()
    {
        return $this->decred_script_version !== null;
    }

    /**
     * Get 'decred_script_version' value
     *
     * @return int
     */
    public function getDecredScriptVersion()
    {
        return $this->decred_script_version;
    }

    /**
     * Set 'decred_script_version' value
     *
     * @param int $value
     */
    public function setDecredScriptVersion($value = null)
    {
        $this->decred_script_version = $value;
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
        if ( ! isset($values['amount'])) {
            throw new \InvalidArgumentException('Field "amount" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['script_pubkey'])) {
            throw new \InvalidArgumentException('Field "script_pubkey" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'decred_script_version' => null
        ], $values);

        $message->setAmount($values['amount']);
        $message->setScriptPubkey($values['script_pubkey']);
        $message->setDecredScriptVersion($values['decred_script_version']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'TxOutputBinType',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'amount',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'script_pubkey',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'decred_script_version',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
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

        if ($this->amount === null) {
            throw new \UnexpectedValueException('Field "\\BitWasp\\TrezorProto\\TxOutputBinType#amount" (tag 1) is required but has no value.');
        }

        if ($this->script_pubkey === null) {
            throw new \UnexpectedValueException('Field "\\BitWasp\\TrezorProto\\TxOutputBinType#script_pubkey" (tag 2) is required but has no value.');
        }

        if ($this->amount !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->amount);
        }

        if ($this->script_pubkey !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeByteStream($stream, $this->script_pubkey);
        }

        if ($this->decred_script_version !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->decred_script_version);
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
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->amount = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->script_pubkey = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->decred_script_version = $reader->readVarint($stream);

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

        if ($this->amount !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->amount);
        }

        if ($this->script_pubkey !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->script_pubkey);
        }

        if ($this->decred_script_version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->decred_script_version);
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
        $this->amount = null;
        $this->script_pubkey = null;
        $this->decred_script_version = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \BitWasp\TrezorProto\TxOutputBinType) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->amount = ($message->amount !== null) ? $message->amount : $this->amount;
        $this->script_pubkey = ($message->script_pubkey !== null) ? $message->script_pubkey : $this->script_pubkey;
        $this->decred_script_version = ($message->decred_script_version !== null) ? $message->decred_script_version : $this->decred_script_version;
    }


}
