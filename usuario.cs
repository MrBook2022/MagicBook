using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Magicbooks
{
    #region Usuario
    public class Usuario
    {
        #region Member Variables
        protected int _idusu;
        protected string _nome;
        protected string _email; 
        protected string _senha;
        protected unknown _ano;
        protected unknown _sexo;
        #endregion
        #region Constructors
        public Usuario() { }
        public Usuario(string nome, string email, string senha, unknown ano, unknown sexo)
        {
            this._nome=nome;
            this._email=email;
            this._senha=senha;
            this._ano=ano;
            this._sexo=sexo;
        }
        #endregion
        #region Public Properties
        public virtual int Idusu
        {
            get {return _idusu;}
            set {_idusu=value;}
        }
        public virtual string Nome
        {
            get {return _nome;}
            set {_nome=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Senha
        {
            get {return _senha;}
            set {_senha=value;}
        }
        public virtual unknown Ano
        {
            get {return _ano;}
            set {_ano=value;}
        }
        public virtual unknown Sexo
        {
            get {return _sexo;}
            set {_sexo=value;}
        }
        #endregion
    }
    #endregion
}