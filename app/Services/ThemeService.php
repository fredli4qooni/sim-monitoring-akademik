<?php

namespace App\Services;

class ThemeService
{
    /**
     * Generate Tailwind CSS color shades (RGB tuples) from a base hex color.
     */
    public static function generateShades(string $hex): array
    {
        $hex = ltrim($hex, '#');
        if (strlen($hex) == 3) {
            $hex = str_repeat(substr($hex, 0, 1), 2) . str_repeat(substr($hex, 1, 1), 2) . str_repeat(substr($hex, 2, 1), 2);
        }

        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));

        $weights = [
            50  => ['mix' => 0.9, 'with' => 255],
            100 => ['mix' => 0.8, 'with' => 255],
            200 => ['mix' => 0.6, 'with' => 255],
            300 => ['mix' => 0.4, 'with' => 255],
            400 => ['mix' => 0.2, 'with' => 255],
            500 => ['mix' => 0,   'with' => 255],
            600 => ['mix' => 0.2, 'with' => 0],
            700 => ['mix' => 0.4, 'with' => 0],
            800 => ['mix' => 0.6, 'with' => 0],
            900 => ['mix' => 0.8, 'with' => 0],
            950 => ['mix' => 0.9, 'with' => 0],
        ];

        $shades = [];
        foreach ($weights as $shade => $config) {
            $mix = $config['mix'];
            $with = $config['with'];
            
            $nR = round($r * (1 - $mix) + $with * $mix);
            $nG = round($g * (1 - $mix) + $with * $mix);
            $nB = round($b * (1 - $mix) + $with * $mix);

            $shades[$shade] = "$nR $nG $nB";
        }

        return $shades;
    }

    /**
     * Get the CSS variables string to inject into <style>
     */
    public static function getCssVariables(): string
    {
        $themeColor = \App\Models\Setting::where('key', 'app_theme_color')->value('value') ?? '#4f46e5';
        $shades = self::generateShades($themeColor);

        $css = ":root {\n";
        foreach ($shades as $shade => $rgb) {
            $css .= "    --color-primary-$shade: $rgb;\n";
        }
        $css .= "}\n";

        return $css;
    }
}
