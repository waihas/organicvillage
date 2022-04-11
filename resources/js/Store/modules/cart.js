import * as types from '../mutation-types'

// one store for entire application
// export default new Vuex.Store({
//   state,
//   strict: debug,
//   getters,
//   actions,
//   mutations
// })

// initial state
export const state = {
    cartOpen: false,
    added: [],
    gammes: [
        {
            id: 'cc919e21sdf',
            name: 'PACK RAMADAN',
            description: "",
            image: 'https://picsum.photos/seed/picsum/200/300',
            products: {
                1: "Chebbakia Home made (Kg)",
                2: "Sellou Home made (Kg)",
                3: "Fekkas Home made (Kg)",
                4: "Amlou Originale (Kg)",
            },
            price: 399
        },
        {
            id: 'bc9a19dfzezs',
            name: 'PACK OLIVES',
            description: "",
            image: 'https://picsum.photos/seed/picsum/200/300',
            products: {
                1: "Huile d'Argan alimentaire-Bio (L)",
                2: "Amlou Originale (Kg)",
                3: "Huile d'Olives alimentaire-Bio(L)",
                4: "Les Olives Rouges-Bio (G)",
                5: "Les Olives Noirs-Bio(G)",
                6: "Capres-Bio",
                7: "Saffron (G)",
            },
            price: 1995
        },
        {
            id: '727026bb8e',
            name: 'PACK COSMETIQUE',
            description: "",
            image: 'https://picsum.photos/seed/picsum/200/300',
            products: {
                1: "Ghassoul Hammam à base des Hèrbes",
                2: "Savon noir avec 6 saveurs - Par Choix-",
                3: "Savon-gommage avec 4 saveurs -Par Choix-",
                4: "Soft Rose: Eau de Rose avec Saffron (100ml)",
                5: "Gommage pour Visage avec 2 saveurs-Par Choix-",
                6: "Huile d'Argane Cosmétique (30ml)",
                7: "Huile Précieuse (50ml)",
            },
            price: 595
        }
    ],
    products: [
        {
            id: 'cee669520c',
            name: 'CHEBBAKIA HOME MADE',
            description: "",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {
                "250 G": 80,
                "500 G": 100,
                "1 KG": 120,
            },
            price: 0
        },
        {
            id: 'bca194454f',
            name: 'SELLOU HOME MADE',
            description: "",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {
                "250 G": 80,
                "500 G": 100,
                "1 KG": 120,
            },
            price: 0
        },
        {
            id: '72702ace6b8e',
            name: 'FEKKAS HOME MADE',
            description: "",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {
                "250 G": 80,
                "500 G": 100,
                "1 KG": 120,
            },
            price: 0
        },
        {
            id: 'sdfllfo-e32488e',
            name: 'ORIGINAL AMLOU',
            description: "(Huile d'argan-Miel-Amonde)",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {
                "250 G": 80,
                "500 G": 100,
                "1 KG": 120,
            },
            price: 0
        },
        {
            id: '7poze-rj2138e',
            name: "HUILE D'ARGANE",
            description: "TORRIFIEE DE REGION IGHREM-TIZNIT",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {
                "250 G": 80,
                "500 G": 100,
                "1 KG": 120,
            },
            price: 0
        },
        {
            id: '7sdfqs2132-b8e',
            name: "HUILES D'OLIVES BIO",
            description: "DE REGION IGHREM-TIZNIT",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {
                "100 ML": 80,
                "250 ML": 100,
                "500 ML": 110,
                "1 L": 120,
            },
            price: 0
        },
        {
            id: '7szreg394-e6b8e',
            name: "OLIVES ROUGE",
            description: "DE REGION IGHREM-TIZNIT",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {
                "X gramme": 80,
            },
            price: 0
        },
        {
            id: 'sdf1230-fdapeo',
            name: "OLIVES NOIRS CONSERVEES",
            description: "(huile d'olives) DE REGION IGHREM-TIZNIT",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {
                "100 ML": 80,
                "250 ML": 100,
                "500 ML": 110,
                "1 L": 120,
            },
            price: 0
        },
        {
            id: '7s2sdf-fqsdf8e',
            name: "CAPRES BIO",
            description: "",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {
                "X gramme": 80,
            },
            price: 0
        },
        {
            id: 'ploqsd123-ace6b8e',
            name: "SAFFRON",
            description: "DE REGION TALIOUINE",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {
                "Gramme": 80,
            },
            price: 0
        },
        {
            id: 'sdfqsf-d123ce6b8e',
            name: "GHASSOUL HAMMAM",
            description: "A BASE DES HERBES(xxG)",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {},
            price: 595
        },
        {
            id: 'dsdf-02acsd-fe6b8e',
            name: "SAVON NOIR AVEC 6 SAVEURS",
            description: "SAVEURS -PAR CHOIX-",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {
                "Argan": 80,
                "Rose": 80,
                "Lavende": 80,
                "Fleur d'Oranger": 80,
                "Menthe": 80,
                "Armoise": 80,
            },
            price: 0
        },
        {
            id: '72702-ace6b8ldl-sdfe',
            name: "SOFT ROSE",
            description: "EAU DE ROSE AVEC SAFFRON(100ml)",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {},
            price: 595
        },
        {
            id: '72702ac-e6b1238e',
            name: "ARGAN OIL COSMETIQUE (30ml)",
            description: "",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {},
            price: 900
        },
        {
            id: '72702sfsq-ace6b8e',
            name: "HUILE PRECIEUSE (100 ml)",
            description: "",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: {},
            price: 700
        }
    ]
}

// getters
export const getters = {
    cartOpen: state => state.cartOpen,
    allProducts: state => state.products, // would need action/mutation if data fetched async
    allGammes: state => state.gammes, // would need action/mutation if data fetched async
    getNumberOfProducts: state => (state.products) ? state.products.length : 0,
    getNumberOfGammes: state => (state.gammes) ? state.gammes.length : 0,
    cart: state => {
        return state.added.map(({ id, price, option, quantity }) => {
            const product = state.products.find(p => p.id === id) || state.gammes.find(p => p.id === id)
            return {
                id: product.id,
                name: product.name,
                image: product.image,
                description: product.description,
                price,
                option,
                quantity
            }
        })
    },
}

// mutations
export const mutations = {
    [types.TOGGLE_CART] (state) {
        state.cartOpen = !state.cartOpen
    },
    [types.ADD_TO_CART] (state, { id, price, option }) {
        const record = state.added.find(p => p.id === id)
        if (!record) {
            state.added.push({
                id,
                price,
                option,
                quantity: 1
            })
        } else {
            // here check if option is the same
            // then increase qty
            // otherwise new push
            // console.log('record' + JSON.stringify(record))
            // console.log("sqdfqdsf" + Object.keys(record.prices));
            // if(record.price == 0) {
                console.log(record.option +"=="+ option)

                if(record.option == option)
                    record.quantity++
                else {
                    state.added.push({
                        id,
                        price,
                        option,
                        quantity: 1
                    })
                }
            // }
            // else {
            //     record.quantity++
            // }
        }
    },
    [types.INCREMENT_QTY] (state, { id }) {
        const record = state.added.find(p => p.id === id)
        if (record) {
            record.quantity++
        }
    },
    [types.DECREMENT_QTY] (state, { id }) {
        const record = state.added.find(p => p.id === id)
        if (record) {
            if(record.quantity < 2)
                state.added.splice(state.added.indexOf(record), 1)
            else
                record.quantity--
        }
    },
}

// actions
export const actions = {
    toggleCart ({ commit, state }) {
        commit(types.TOGGLE_CART)
    },
    addToCart({ commit }, payload) {
        console.log('received data: ' + payload.productId + ' ' + payload.price +' and ' +  payload.option)
        commit(types.ADD_TO_CART, {
            id: payload.productId,
            price: payload.price,
            option: payload.option
        })
        commit(types.TOGGLE_CART)
    },
    incrementQty({ commit }, {id}) {
        commit(types.INCREMENT_QTY, {
            id: id,
        })
    },
    decrementQty({ commit }, {id}) {
        commit(types.DECREMENT_QTY, {
            id: id,
        })
    }
}
