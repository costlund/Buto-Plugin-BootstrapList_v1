# Buto-Plugin-BootstrapList_v1
Render list with links.

## Widget list
```
type: widget
data:
  plugin: bootstrap/list_v1
  method: list
  data:
    title: 'Social media'
    item: yml:/theme/[theme]/layout/navbar.yml:social_media
```

## Data
```
social_media:
  -
    href: 'https://www.facebook.com/MyPage'
    icon: facebook
    text: Facebook
    target: _blank
  -
    href: 'https://twitter.com/MyPage'
    icon: twitter
    text: Twitter
    target: _blank
  -
    href: 'https://twitter.com/MyPage'
    img: /path_to_image
    text: Twitter
    target: _blank
```

### Icon
Param icon (optional) is one of Bootstrap icons from plugin icons/bootstrap_v1_8_1.

### Image
Param img (optional) to add an image.