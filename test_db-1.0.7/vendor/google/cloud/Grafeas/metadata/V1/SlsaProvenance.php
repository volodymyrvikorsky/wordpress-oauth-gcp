<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/slsa_provenance.proto

namespace GPBMetadata\Grafeas\V1;

class SlsaProvenance
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 grafeas/v1/slsa_provenance.proto
grafeas.v1google/protobuf/timestamp.proto"�
SlsaProvenance7
builder (2&.grafeas.v1.SlsaProvenance.SlsaBuilder5
recipe (2%.grafeas.v1.SlsaProvenance.SlsaRecipe9
metadata (2\'.grafeas.v1.SlsaProvenance.SlsaMetadata6
	materials (2#.grafeas.v1.SlsaProvenance.Material�

SlsaRecipe
type (	
defined_in_material (
entry_point (	\'
	arguments (2.google.protobuf.Any)
environment (2.google.protobuf.AnyM
SlsaCompleteness
	arguments (
environment (
	materials (�
SlsaMetadata
build_invocation_id (	4
build_started_on (2.google.protobuf.Timestamp5
build_finished_on (2.google.protobuf.TimestampA
completeness (2+.grafeas.v1.SlsaProvenance.SlsaCompleteness
reproducible (
SlsaBuilder

id (	�
Material
uri (	?
digest (2/.grafeas.v1.SlsaProvenance.Material.DigestEntry-
DigestEntry
key (	
value (	:8Bf

        , true);

        static::$is_initialized = true;
    }
}
