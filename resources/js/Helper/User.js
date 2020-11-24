import Token from './Token'

class User {
    login(data){
        axios.post('/api/auth/login',data)
        .then(res=>{
           // console.log(res.data)
             Token.payload(res.data.access_token)
        })
        .catch(error=>console.log(error.res.data))
     }
     responseAfterLogin(res) {
        const access_token = res.data.access_token
        const username = res.data.user

        if (Token.isValid(access_token)) {
            AppStorage.store(username, access_token)
            // window.location = '/forum'
        }
    }
}
export default User=new User();