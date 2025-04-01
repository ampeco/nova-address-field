<?php

namespace DigitalCloud\AddressField;

use Laravel\Nova\Fields\Field;

class AddressField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'address-field';

    public function withMap(): static
    {
        return $this->withMeta([
            'withMap' => true,
        ]);
    }

    public function withLatLng(): static
    {
        return $this->withMeta([
            'withLatLng' => true,
        ]);
    }

    public function hideToggles(): static
    {
        return $this->withMeta([
            'hideToggles' => true,
        ]);
    }

    public function countryCode($field): static
    {
        return $this->withMeta([
            'countryCode' => $field,
        ]);
    }

    public function country($field): static
    {
        return $this->withMeta([
            'country' => $field,
        ]);
    }

    /**
     * City
     * @param $field
     * @return AddressField
     */
    public function locality($field): static
    {
        return $this->withMeta([
            'locality' => $field,
        ]);
    }

    public function administrativeArea($field): static
    {
        return $this->withMeta([
            'administrative_area_level_1' => $field,
        ]);
    }

    public function postalCode($field): static
    {
        return $this->withMeta([
            'postal_code' => $field,
        ]);
    }

    public function address($field, $inArrayKey = null): static
    {
        return $this->withMeta([
            'address_field' => $field,
            'address_field_array_key' => $inArrayKey,
        ]);
    }

    public function streetAddress($field, $inArrayKey = null): static
    {
        return $this->withMeta([
            'street_address_field' => $field,
            'street_address_array_key' => $inArrayKey,
        ]);
    }

    public function latitude($field): static
    {
        return $this->withMeta([
            'latitude_field' => $field,
        ]);
    }

    public function longitude($field): static
    {
        return $this->withMeta([
            'longitude_field' => $field,
        ]);
    }

    public function countries($list): static
    {
        return $this->withMeta([
            'countries' => $list,
        ]);
    }

    public function initLocation($latitude, $longitude): static
    {
        return $this->withMeta([
            'lat' => $latitude,
            'lng' => $longitude,
        ]);
    }

    public function doNotStore(): static
    {
        $this->fillUsing(function () {
        });
        $this->withMeta(['do_not_store' => true]);

        return $this;
    }

    public function manualFill($label): static
    {
        return $this->withMeta(['manual_fill' => $label]);
    }

    public function zoom($zoom): static
    {
        return $this->withMeta([
            'zoom' => $zoom,
        ]);
    }

    public function timezone(string $field): static
    {
        return $this->withMeta([
            'timezone' => $field,
        ]);
    }

    public function regionStates(array $states): static
    {
        return $this->withMeta([
            'region_states' => $states,
        ]);
    }

    public function initPin(bool $initPin): self
    {
        return $this->withMeta([
            'init_pin' => $initPin,
        ]);
    }
}
