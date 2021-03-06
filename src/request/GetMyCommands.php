<?php
/*
 * @copyright 2019-2020 Dicr http://dicr.org
 * @author Igor A Tarasov <develop@dicr.org>
 * @license MIT
 * @version 05.11.20 04:47:21
 */

declare(strict_types = 1);
namespace dicr\telegram\request;

use dicr\telegram\entity\BotCommand;
use dicr\telegram\TelegramRequest;
use yii\base\Exception;

/**
 * Use this method to get the current list of the bot's commands. Requires no parameters.
 * Returns Array of BotCommand on success.
 *
 * @link https://core.telegram.org/bots/api#getmycommands
 */
class GetMyCommands extends TelegramRequest
{
    /**
     * @inheritDoc
     */
    public function func(): string
    {
        return 'getMyCommands';
    }

    /**
     * @inheritDoc
     * @return BotCommand[]
     * @throws Exception
     */
    public function send(): array
    {
        return array_map(static function ($data) : BotCommand {
            return new BotCommand([
                'json' => $data
            ]);
        }, parent::send());
    }
}
