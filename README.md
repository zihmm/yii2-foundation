<p align="center">
    <a href="https://www.yiiframework.com/" target="_blank">
        <img src="https://www.yiiframework.com/image/yii_logo_light.svg" width="400" alt="Yii Framework" />
    </a>
</p>

Custom «Yii2 Foundation» basic setup with Twig as default template engine and service driven DI. 

All unnecessary default templates / models / classes wiped out, added some meaningful default configs 
for dev & prod and production config.

- Build-in common exception system
- Confortable localization (ex. `_t($message, MessageCategoryEnum::Notifcations`)
- Confortable dedicated logging. `plog($message)` logs to seperate `runtime/logs/project.log`
- `@scripts` alias points to  `@web/scripts`