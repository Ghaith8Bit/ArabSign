<?php

namespace App\Enums;

use ReflectionEnum;
use ReflectionEnumUnitCase;
use ReflectionException;

enum LibraryTypeEnum
{
    case Image;
    case GIF;
    case Video;
    case Facebook;
    case Instagram;
    case YouTube;
    case TikTok;
    case X;

    public function isValidExtension(string $extension) : bool
    {
        switch ($this) {
            case self::Image:
                return in_array($extension, ['jpeg', 'jpg', 'png', 'svg']);
            case self::GIF:
                return $extension === 'gif';
            case self::Video:
                return in_array($extension, ['mp4', 'avi']);
            default:
                return false;
        }
    }

    public static function toArray() : array
    {
        return (new ReflectionEnum(__CLASS__))->getCases();
    }

    public static function match(string $case) : LibraryTypeEnum
    {
        try {
            return (new ReflectionEnum(__CLASS__))->getCase($case)->getValue();
        } catch (ReflectionException $exception) {
            throw new ReflectionException('النوع الذي تم اختياره غير متوافق مع الانواع الموجودة في قاعدة البيانات');
        }
    }

    public static function has(string $case) : bool
    {
        return (new ReflectionEnum(__CLASS__))->hasCase($case);
    }
}
