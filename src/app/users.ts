export class Users {
    public Id: number;
    public name: string;
    public shop_name: string;
    public pwd:string;
    public email:string;
    
    constructor(Id:number,name: string,shop_name: string,pwd:string,email:string) {
    this.Id = Id;
    this.name = name;
    this.shop_name = shop_name;
    this.pwd = pwd;
    this.email = email;
    }
    }