import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import 'rxjs/add/operator/map';

@Injectable({
  providedIn: 'root'
})
export class ApiServiceService {

  caminho = 'http://localhost/crudangular/';
  //caminho = 'http://angularcrud-com-br.umbler.net/';

  constructor(private http:HttpClient) { }

  Api(dados:any, api:string){
    const httpOptions = {
      headers:new HttpHeaders({'Content-Type': 'application/json'})
    };
      const url = this.caminho + api;
      return this.http.post(url, JSON.stringify(dados), httpOptions).map(res => res);
  }
}
