
# Antares HTTP API CORS Bypasser

Alternative javascript GET & POST code to Antares HTTP API without causing CORS issue. To use this, you need [jQuery](https://cdnjs.com/libraries/jquery) library.

## Features

| Features | Availability | 
| :-------- | :------- | 
| Bypass CORS | ✅ |
| MQTT notify on POST | ✅ |
| Dynamic Usage | ❎ , MQTT notify always on |

  
## API Reference

#### GET data

```http
  POST /get-data.php
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `endpoint` | `string` | **Required**. Device URL + /la |
| `accesskey` | `string` | **Required**. Personal antares Access Key |

#### POST data

```http
  POST /post-data.php
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `data`      | `string` | **Required**. Payload for Antares Device |
| `endpoint` | `string` | **Required**. Device URL + /la |
| `accesskey` | `string` | **Required**. Personal antares Access Key |

  
## Usage/Examples

#### GET data

```javascript
$.ajax({
    url: "https://antares-gp.herokuapp.com/get-data.php",
    method: "POST",
    crossDomain: true,
    data: { 
        endpoint: "https://platform.antares.id:8443/~/antares-cse/antares-id/tesMQTT/esp32/la",
        accesskey: "Your Access Key" 
    },
    success: (res) => {
        console.log("Success : ", res);
    },
    error: (res, status, error) => {
        console.log("Error : ", res);
    },
});
```

#### POST data

change the `data` and `endpoint` accordingly.

```javascript
$.ajax({
    url: "https://antares-gp.herokuapp.com/post-data.php",
    method: "POST",
    crossDomain: true,
    data: { 
        data: `{\r\n    \"m2m:cin\": {\r\n    \"con\": \"{\\\"lamp\\\":1}\"\r\n    }\r\n}`,
        endpoint: "https://platform.antares.id:8443/~/antares-cse/antares-id/tesMQTT/esp32",
        accesskey: "Your Access Key" 
    },
    success: (res) => {
        console.log("Success : ", res);
    },
    error: (res, status, error) => {
        console.log("Error : ", res);
    },
});
```
  
## License

Last Updated : June 13th, 2021

**Personal Use Only**

  