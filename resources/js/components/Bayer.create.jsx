import React, { useState } from "react";
import axios from 'axios';
import { Button, Form, Input } from 'antd';


export default function CreateBayer() {
   
    const onFinish = async (values) => {
        await axios.post('/api/bayers', values).then(function (response) {
            window.location = "/dictonaries";
            console.log(response);
        }).catch(function (error) {
            console.log(error);
        })
      };
      
  
    return (
        <Form
            name="basic"
            labelCol={{
                span: 8,
            }}
            wrapperCol={{
                span: 16,
            }}
            initialValues={{
                remember: true,
            }}
            onFinish={onFinish}
            //onFinishFailed={onFinishFailed}
            autoComplete="off"
        >
            <Form.Item
                label="Имя"
                name="name"
                rules={[
                    {
                        required: true,
                        message: 'Пожалуйста введите имя',
                    },
                ]}
            >
                <Input />
            </Form.Item>

            <Form.Item
                wrapperCol={{
                    offset: 8,
                    span: 16,
                }}
            >
                <Button type="primary" htmlType="submit">
                    Добавить
                </Button>
            </Form.Item>
        </Form>
    )
}