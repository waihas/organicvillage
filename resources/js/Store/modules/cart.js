import * as types from '../mutation-types'

// one store for entire application
// export default new Vuex.Store({
//   state,
//   strict: debug,
//   getters,
//   actions,
//   mutations
// })

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
            prices: [
                {
                    id: 'cee669520c-250-G',
                    weight: "250 G",
                    price: 80,
                },
                {
                    id: 'cee669520c-500-G',
                    weight: "500 G",
                    price: 100,
                },
                {
                    id: 'cee669520c-1-KG',
                    weight: "1 KG",
                    price: 120,
                }
            ],
            price: 0
        },
        {
            id: 'bca194454f',
            name: 'SELLOU HOME MADE',
            description: "",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: [
                {
                    id: 'bca194454f-250-G',
                    weight: "250 G",
                    price: 80,
                },
                {
                    id: 'bca194454f-500-G',
                    weight: "500 G",
                    price: 100,
                },
                {
                    id: 'bca194454f-1-KG',
                    weight: "1 KG",
                    price: 120,
                }
            ],
            price: 0
        },
        {
            id: '72702ace6b8e',
            name: 'FEKKAS HOME MADE',
            description: "",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: [
                {
                    id: '72702ace6b8e-250-G',
                    weight: "250 G",
                    price: 80,
                },
                {
                    id: '72702ace6b8e-500-G',
                    weight: "500 G",
                    price: 100,
                },
                {
                    id: '72702ace6b8e-1-KG',
                    weight: "1 KG",
                    price: 120,
                }
            ],
            price: 0
        },
        {
            id: 'sdfllfo-e32488e',
            name: 'ORIGINAL AMLOU',
            description: "(Huile d'argan-Miel-Amonde)",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: [
                {
                    id: 'sdfllfo-e32488e-250-G',
                    weight: "250 G",
                    price: 80,
                },
                {
                    id: 'sdfllfo-e32488e-500-G',
                    weight: "500 G",
                    price: 100,
                },
                {
                    id: 'sdfllfo-e32488e-1-KG',
                    weight: "1 KG",
                    price: 120,
                }
            ],
            price: 0
        },
        {
            id: '7poze-rj2138e',
            name: "HUILE D'ARGANE",
            description: "TORRIFIEE DE REGION IGHREM-TIZNIT",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: [
                {
                    id: '7poze-rj2138e-250-G',
                    weight: "250 G",
                    price: 80,
                },
                {
                    id: '7poze-rj2138e-500-G',
                    weight: "500 G",
                    price: 100,
                },
                {
                    id: '7poze-rj2138e-1-KG',
                    weight: "1 KG",
                    price: 120,
                }
            ],
            price: 0
        },
        {
            id: '7sdfqs2132-b8e',
            name: "HUILES D'OLIVES BIO",
            description: "DE REGION IGHREM-TIZNIT",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: [
                {
                    id: '7sdfqs2132-b8e-100-ML',
                    weight: "100 ML",
                    price: 80,
                },
                {
                    id: '7sdfqs2132-b8e-250-ML',
                    weight: "250 ML",
                    price: 100,
                },
                {
                    id: '7sdfqs2132-b8e-500-ML',
                    weight: "500 ML",
                    price: 110,
                },
                {
                    id: '7sdfqs2132-b8e-1-L',
                    weight: "1 L",
                    price: 120,
                }
            ],
            price: 0
        },
        {
            id: '7szreg394-e6b8e',
            name: "OLIVES ROUGE",
            description: "DE REGION IGHREM-TIZNIT",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: [
                {
                    id: '7szreg394-e6b8e-X-gramme',
                    weight: "X gramme",
                    price: 80,
                }
            ],
            price: 0
        },
        {
            id: 'sdf1230-fdapeo',
            name: "OLIVES NOIRS CONSERVEES",
            description: "(huile d'olives) DE REGION IGHREM-TIZNIT",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: [
                {
                    id: 'sdf1230-fdapeo-100-ML',
                    weight: "100 ML",
                    price: 80,
                },
                {
                    id: 'sdf1230-fdapeo-250-ML',
                    weight: "250 ML",
                    price: 100,
                },
                {
                    id: 'sdf1230-fdapeo-500-ML',
                    weight: "500 ML",
                    price: 110,
                },
                {
                    id: 'sdf1230-fdapeo-1-L',
                    weight: "1 L",
                    price: 120,
                }
            ],
            price: 0
        },
        {
            id: '7s2sdf-fqsdf8e',
            name: "CAPRES BIO",
            description: "",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: [
                {
                    id: '7s2sdf-fqsdf8e-X-gramme',
                    weight: "X gramme",
                    price: 80,
                }
            ],
            price: 0
        },
        {
            id: 'ploqsd123-ace6b8e',
            name: "SAFFRON",
            description: "DE REGION TALIOUINE",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: [
                {
                    id: 'ploqsd123-ace6b8e-Gramme',
                    weight: "Gramme",
                    price: 80,
                }
            ],
            price: 0
        },
        {
            id: 'sdfqsf-d123ce6b8e',
            name: "GHASSOUL HAMMAM",
            description: "A BASE DES HERBES(xxG)",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: [],
            price: 595
        },
        {
            id: 'dsdf-02acsd-fe6b8e',
            name: "SAVON NOIR AVEC 6 SAVEURS",
            description: "SAVEURS -PAR CHOIX-",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: [
                {
                    id: 'dsdf-02acsd-fe6b8e-Argan',
                    weight: "Argan",
                    price: 80,
                },
                {
                    id: 'dsdf-02acsd-fe6b8e-Rose',
                    weight: "Rose",
                    price: 80,
                },
                {
                    id: 'dsdf-02acsd-fe6b8e-Lavende',
                    weight: "Lavende",
                    price: 80,
                },
                {
                    id: 'dsdf-02acsd-fe6b8e-Fleur-Oranger',
                    weight: "Fleur d'Oranger",
                    price: 80,
                },
                {
                    id: 'dsdf-02acsd-fe6b8e-Menthe',
                    weight: "Menthe",
                    price: 80,
                },
                {
                    id: 'dsdf-02acsd-fe6b8e-Armoise',
                    weight: "Armoise",
                    price: 80,
                }
            ],
            price: 0
        },
        {
            id: '72702-ace6b8ldl-sdfe',
            name: "SOFT ROSE",
            description: "EAU DE ROSE AVEC SAFFRON(100ml)",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: [],
            price: 595
        },
        {
            id: '72702ac-e6b1238e',
            name: "ARGAN OIL COSMETIQUE (30ml)",
            description: "",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: [],
            price: 900
        },
        {
            id: '72702sfsq-ace6b8e',
            name: "HUILE PRECIEUSE (100 ml)",
            description: "",
            image: 'https://picsum.photos/seed/picsum/200/300',
            prices: [],
            price: 700
        }
    ]
}

export const getters = {
    cartOpen: state => state.cartOpen,
    allProducts: state => state.products, // would need action/mutation if data fetched async
    allGammes: state => state.gammes, // would need action/mutation if data fetched async
    getNumberOfProducts: state => (state.products) ? state.products.length : 0,
    getNumberOfGammes: state => (state.gammes) ? state.gammes.length : 0,
    cart: state => {
        return state.added.map(({ id, price, option_id, option, quantity }) => {
            const product = state.products.find(p => p.id === id) || state.gammes.find(p => p.id === id)
            return {
                id: product.id,
                name: product.name,
                image: product.image,
                description: product.description,
                price,
                option_id,
                option,
                quantity
            }
        })
    },
}

export const mutations = {
    [types.TOGGLE_CART] (state) {
        state.cartOpen = !state.cartOpen
    },
    [types.ADD_TO_CART] (state, { id, price, option_id, option }) {
        const record = state.added.find(p => (p.id === id && p.option_id == option_id))
        if (!record) {
            state.added.push({
                id,
                price,
                option_id,
                option,
                quantity: 1
            })
        } else {
            record.quantity++
        }
    },
    [types.INCREMENT_QTY] (state, { id, option_id }) {
        const record = state.added.find(p => (p.id === id && p.option_id == option_id))
        if (record) {
            record.quantity++
        }
    },
    [types.DECREMENT_QTY] (state, { id, option_id }) {
        const record = state.added.find(p => (p.id === id && p.option_id == option_id))
        if (record) {
            if(record.quantity < 2)
                state.added.splice(state.added.indexOf(record), 1)
            else
                record.quantity--
        }
    },
    [types.CLEAR_CART] (state) {
        state.added = [];
    },
}

export const actions = {
    toggleCart ({ commit, state }) {
        commit(types.TOGGLE_CART)
    },
    addToCart({ commit }, payload) {
        commit(types.ADD_TO_CART, {
            id: payload.productId,
            price: payload.price,
            option_id: payload.optionId,
            option: payload.option,
        })
        commit(types.TOGGLE_CART)
    },
    incrementQty({ commit }, {id, optionId}) {
        commit(types.INCREMENT_QTY, {
            id: id,
            option_id: optionId,
        })
    },
    decrementQty({ commit }, {id, optionId}) {
        commit(types.DECREMENT_QTY, {
            id: id,
            option_id: optionId,
        })
    },
    clearCart({ commit }) {
        commit(types.CLEAR_CART)
    }
}
